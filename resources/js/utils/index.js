import * as $ from 'jquery';
import Swal from 'sweetalert2';
import 'select2';
import 'print-js';

export default (function () {
  // ------------------------------------------------------
  // @Window Resize
  // ------------------------------------------------------

  /**
   * NOTE: Register resize event for Masonry layout
   */
  const EVENT = document.createEvent('UIEvents');
  window.EVENT = EVENT;
  EVENT.initUIEvent('resize', true, false, window, 0);

  window.Swal = require('sweetalert2');

  window.addEventListener('load', () => {
    /**
     * Trigger window resize event after page load
     * for recalculation of masonry layout.
     */
    window.dispatchEvent(EVENT);
  });


    // encriptar simple super bueno
    window.encrita = (str) => {
        let encoded = "";
        for (let i = 0; i<str.length;i++) {
            var a = str.charCodeAt(i);
            var b = a ^ 123;    // bitwise XOR with any number, e.g. 123
            encoded = encoded+String.fromCharCode(b);
        }
        return encoded;
    };


    window.lanzarAjax = (str) => {
        let urls = str;
        $('.alert').html('');

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
            }
        });
        $.ajax({
            url: urls,
            method: 'get'
        }).done(function(data){
            if (data.success){
            $('.alert').addClass('alert-success');
            $('.alert').show();
            $('.alert').html('<p>'+data.success+'</p>');
            }

            setTimeout(function(){
                $('.alert').hide();
            },2500);
        });
    };

    window.encritarAjax = (str) => {
        let resultado =  "";
        let urls = "{{ route('home.sEncrintarAjax', ':idd') }}";
        urls = urls.replace(':idd', str);

        $.ajaxSetup({
            headers: { 'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content') }
        });
        $.ajax({
            url: urls,
            method: 'get',
            async: false,
        }).done(function(data){
            if (data.success){
            resultado = data.success;
            }
        });
        return resultado;
    };

    window.CryptoJSAesJson = {
        stringify: function (cipherParams) {
            let j = {ct: cipherParams.ciphertext.toString(CryptoJS.enc.Base64)};
            if (cipherParams.iv) j.iv = cipherParams.iv.toString();
            if (cipherParams.salt) j.s = cipherParams.salt.toString();
            return JSON.stringify(j);
        },
        parse: function (jsonStr) {
            let j = JSON.parse(jsonStr);
            var cipherParams = CryptoJS.lib.CipherParams.create({ciphertext: CryptoJS.enc.Base64.parse(j.ct)});
            if (j.iv) cipherParams.iv = CryptoJS.enc.Hex.parse(j.iv)
            if (j.s) cipherParams.salt = CryptoJS.enc.Hex.parse(j.s)
            return cipherParams;
        }
    };

    window.encritarJS = (str) => {
        let encrypted = CryptoJS.AES.encrypt(JSON.stringify(str),"18XgeQZpyAzv8KOS/DPZHmmolD7MizqKUcATwvmwXXL=", {format: CryptoJSAesJson}).toString();
        return encrypted;
    };


  // ------------------------------------------------------
  // @External Links
  // ------------------------------------------------------

  // Open external links in new window
  $('a')
    .filter('[href^="http"], [href^="//"]')
    .not(`[href*="${window.location.host}"]`)
    .attr('rel', 'noopener noreferrer')
    .attr('target', '_blank');


  // ------------------------------------------------------
  // @Resize Trigger
  // ------------------------------------------------------

  // Trigger resize on any element click
  document.addEventListener('click', () => {
    window.dispatchEvent(window.EVENT);
  });


    $(document).on('click', "a[rel='tab']", function(e) {
        event.preventDefault();
        if ( $(this).attr('href') != '#' ) {
          $('.ajax-content').html('');
          $.get($(this).attr("href"), function(data){
            if (data.successlogin){
              window.open("https://aromanos.co/login");
            } else {

            var data = $.parseJSON(data);
            var cade = '';
            cade += data.pageheader;
            cade += data.content;
            cade += data.js;
            $('.ajax-content').html(cade);
            }

          });
        };
    });

    $(document).on('click', ".sf_guardar", function(e) {
      e.preventDefault();

       var urls = $(this).data('remote');
       $('.alert').html('');

       $.ajaxSetup({
          headers: {
              'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
          }
       });
       $.ajax({
          url: urls,
          method: 'post',
          data: $('#sf_form').serialize(),
          success: function(data){
              $.each(data.errors, function(key, value){
                $('body, html').animate({
                        scrollTop: '0px'
                      }, 300);
                $('.alert').addClass('alert-danger');
                $('.alert').show();
                $('.alert').append('<p>'+value+'</p>');
              });
          }
       }).done(function(data){
          if (data.success){
              $('body, html').animate({
                        scrollTop: '0px'
                      }, 300);
              $('.alert').removeClass('alert-danger');
              $('.alert').addClass('alert-success');
              $('.alert').show();
              $('.alert').html('<p>'+data.success+'</p>');
            }

            setTimeout(function(){
                $('.alert').hide();
              },5000);
       });
    });



    $(document).on('click', ".sf_guardar_factura", function(e) {
      e.preventDefault();

        Swal.fire({
            title: '¿Estás seguro?',
            text: 'Estas seguro de continuar',
            type: 'success',
            showCancelButton: true,
            confirmButtonColor: 'null',
            cancelButtonColor: 'null',
            confirmButtonClass: 'btn btn-danger',
            cancelButtonClass: 'btn btn-primary',
            confirmButtonText: 'Si seguro!',
            cancelButtonText: 'Cancelar',
        }).then(res => {
            if (res.value) {
                var urls = $(this).data('remote');
                //_this.closest("form").submit();
                $('.alert').html('');

                 $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                    }
                 });
                 $.ajax({
                    url: urls,
                    method: 'post',
                    data: $('#sf_form').serialize(),
                    success: function(data){
                        $.each(data.errors, function(key, value){
                          $('body, html').animate({
                                  scrollTop: '0px'
                                }, 300);
                          $('.alert').addClass('alert-danger');
                          $('.alert').show();
                          $('.alert').append('<p>'+value+'</p>');
                        });
                    }
                 }).done(function(data){
                    if (data.success){
                        $('body, html').animate({
                          scrollTop: '0px'
                        }, 300);
                        $('.alert').removeClass('alert-danger');
                        $('.alert').addClass('alert-success');
                        $('.alert').show();
                        $('.alert').html('<p>'+data.success+'</p>');
                        recargarfac(data.fac_id);
                      }

                      setTimeout(function(){
                          $('.alert').hide();
                        },5000);
                 });
            }
        });

    });

    $(document).on('click', ".sf_editar", function(e) {
       e.preventDefault();

       var urls = $(this).data('remote');
       $('.alert').html('');

       $.ajaxSetup({
          headers: {
              'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
          }
       });
       $.ajax({
          url: urls,
          data: $('#sf_form').serialize(),
          method: 'put',
          success: function(data){
              $.each(data.errors, function(key, value){
                $('body, html').animate({
                        scrollTop: '0px'
                      }, 300);
                $('.alert').addClass("alert-danger");
                $('.alert').show();
                $('.alert').append('<p>'+value+'</p>');
              });
          }
       }).done(function(data){
            if (data.success){
              $('body, html').animate({
                        scrollTop: '0px'
                      }, 300);
              $('.alert').removeClass('alert-danger');
              $('.alert').addClass("alert-success");
              $('.alert').show();
              $('.alert').html('<p>'+data.success+'</p>');
            }

            setTimeout(function(){
                $('.alert').hide();
              },5000);
       });

    });



    $(document).on('click', "form.delete button", function(e) {
        var _this = $(this);
        e.preventDefault();
        Swal.fire({
            title: '¿Estás seguro?',
            text: 'Estas seguro de continuar',
            type: 'error',
            showCancelButton: true,
            confirmButtonColor: 'null',
            cancelButtonColor: 'null',
            confirmButtonClass: 'btn btn-danger',
            cancelButtonClass: 'btn btn-primary',
            confirmButtonText: 'Si seguro!',
            cancelButtonText: 'Cancelar',
        }).then(res => {
            if (res.value) {
                var urls = $(this).data('remote');
                _this.closest("form").submit();
                $('.alert').html('');

                $.ajaxSetup({
                  headers: {
                      'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                  }
               });
               $.ajax({
                  url: urls,
                  method: 'delete',
                  headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                  data: $('#sf_form').serialize(),
                  success: function(data){
                      $('body, html').animate({
                        scrollTop: '0px'
                      }, 300);
                      $('.alert').removeClass('alert-danger');
                      $('.alert').addClass("alert-success");
                      $('.alert').show();
                      $('.alert').append('<p>'+data.success+'</p>');
                  }
               });

               // var myGrilla = $('#tdatajs').DataTable();
               // myGrilla.row($(this).parents('tr')).remove().draw(false);

            }
        });
    });


    $(document).on('click', "form.deletedet button", function(e) {
        var _this = $(this);
        e.preventDefault();
        Swal.fire({
            title: '¿Estás seguro?',
            text: 'Estas seguro de continuar',
            type: 'error',
            showCancelButton: true,
            confirmButtonColor: 'null',
            cancelButtonColor: 'null',
            confirmButtonClass: 'btn btn-danger',
            cancelButtonClass: 'btn btn-primary',
            confirmButtonText: 'Si seguro!',
            cancelButtonText: 'Cancelar',
        }).then(res => {
            if (res.value) {
                var urls = $(this).data('remote');
                _this.closest("form").submit();
                $('.alert').html('');

                $.ajaxSetup({
                  headers: {
                      'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                  }
               });
               $.ajax({
                  url: urls,
                  method: 'delete',
                  headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                  data: $('#sf_form').serialize(),
                  success: function(data){
                      $('body, html').animate({
                        scrollTop: '0px'
                      }, 300);
                      $('.alert').removeClass('alert-danger');
                      $('.alert').addClass("alert-success");
                      $('.alert').show();
                      $('.alert').append('<p>'+data.success+'</p>');
                      $("input[name='total']").val(data.tot);
                  }
               });

               //var myGrilla = $('#tdatajs').DataTable();
               //myGrilla.row($(this).parents('tr')).remove().draw(false);

            }
        });
    });


    $(document).on('click', "form.deletedetcontable button", function(e) {
        var _this = $(this);
        e.preventDefault();
        Swal.fire({
            title: '¿Estás seguro?',
            text: 'Estas seguro de continuar',
            type: 'error',
            showCancelButton: true,
            confirmButtonColor: 'null',
            cancelButtonColor: 'null',
            confirmButtonClass: 'btn btn-danger',
            cancelButtonClass: 'btn btn-primary',
            confirmButtonText: 'Si seguro!',
            cancelButtonText: 'Cancelar',
        }).then(res => {
            if (res.value) {
                var urls = $(this).data('remote');
                _this.closest("form").submit();
                $('.alert').html('');

                $.ajaxSetup({
                  headers: {
                      'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                  }
               });
               $.ajax({
                  url: urls,
                  method: 'delete',
                  headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                  data: $('#sf_form').serialize(),
                  success: function(data){
                      $('body, html').animate({
                        scrollTop: '0px'
                      }, 300);
                      $('.alert').removeClass('alert-danger');
                      $('.alert').addClass("alert-success");
                      $('.alert').show();
                      $('.alert').append('<p>'+data.success+'</p>');
                      $cargartd = data.ctd;
                      $cargartc = data.ctc;
                      $cargardi = data.cdi;
                      recargar();
                  }
               });

               //var myGrilla = $('#tdatajs').DataTable();
               //myGrilla.row($(this).parents('tr')).remove().draw(false);

            }
        });
    });




    $(document).on('click', ".sf_guardar_file", function(e){
       e.preventDefault();

       var urls = $(this).data('remote');
       $('.alert').html('');

       $.ajaxSetup({
          headers: {
              'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
          }
       });

       var file = document.getElementById('uploadedFile').files[0];
       var form = $('#sf_form')[0];
       var formData = new FormData(form);
       formData.append("File", file);

       $.ajax({
          url: urls,
          method: 'post',
          data: formData,
          contentType: "application/octet-stream",
          enctype: 'multipart/form-data',
          contentType: false,
          processData: false,
          success: function(data){
              $.each(data.errors, function(key, value){
                $('body, html').animate({
                        scrollTop: '0px'
                      }, 300);
                $('.alert').addClass("alert-danger");
                $('.alert').show();
                $('.alert').append('<p>'+value+'</p>');
              });
          }
       }).done(function(data){
          if (data.success){
              $('body, html').animate({
                        scrollTop: '0px'
                      }, 300);
              $('.alert').removeClass('alert-danger');
              $('.alert').addClass("alert-success");
              $('.alert').show();
              $('.alert').html('<p>'+data.success+'</p>');
            }

            setTimeout(function(){
                $('.alert').hide();
              },5000);
       });
    });

    $(document).on('click', ".sf_editar_file", function(e){
       e.preventDefault();

       var urls = $(this).data('remote');
       $('.alert').html('');

       $.ajaxSetup({
          headers: {
              'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
          }
       });

      var file = document.getElementById('uploadedFile').files[0];
      var form = $('#sf_form')[0];
      var formData = new FormData(form);
      formData.append("File", file);

       $.ajax({
          url: urls,
          method: 'post',
          data: formData,
          contentType: "application/octet-stream",
          enctype: 'multipart/form-data',
          contentType: false,
          processData: false,
          success: function(data){
              $.each(data.errors, function(key, value){
                $('body, html').animate({
                        scrollTop: '0px'
                      }, 300);
                $('.alert').addClass("alert-danger");
                $('.alert').show();
                $('.alert').append('<p>'+value+'</p>');
              });
          }
       }).done(function(data){
          if (data.success){
              $('body, html').animate({
                        scrollTop: '0px'
                      }, 300);
              $('.alert').removeClass('alert-danger');
              $('.alert').addClass("alert-success");
              $('.alert').show();
              $('.alert').html('<p>'+data.success+'</p>');
            }

            setTimeout(function(){
                $('.alert').hide();
              },5000);
       });
    });

    $(document).on('click', ".sf_editarfin", function(e) {
        e.preventDefault();

          Swal.fire({
              title: '¿Estás seguro?',
              text: 'Estas seguro de continuar',
              type: 'success',
              showCancelButton: true,
              confirmButtonColor: 'null',
              cancelButtonColor: 'null',
              confirmButtonClass: 'btn btn-danger',
              cancelButtonClass: 'btn btn-primary',
              confirmButtonText: 'Si seguro!',
              cancelButtonText: 'Cancelar',
          }).then(res => {
              if (res.value) {
                  var urls = $(this).data('remote');
                  $('.alert').html('');

                   $.ajaxSetup({
                      headers: {
                          'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                      }
                   });
                   $.ajax({
                        url: urls,
                        data: $('#sf_form').serialize(),
                        method: 'put',
                        success: function(data){
                            $.each(data.errors, function(key, value){
                            $('body, html').animate({
                                    scrollTop: '0px'
                                    }, 300);
                            $('.alert').addClass("alert-danger");
                            $('.alert').show();
                            $('.alert').append('<p>'+value+'</p>');
                            });
                        }
                   }).done(function(data){
                      if (data.success){
                          $('body, html').animate({
                            scrollTop: '0px'
                          }, 300);
                          $('.alert').removeClass('alert-danger');
                          $('.alert').addClass('alert-success');
                          $('.alert').show();
                          $('.alert').html('<p>'+data.success+'</p>');
                          recargarfin();
                        }

                        setTimeout(function(){
                            $('.alert').hide();
                          },5000);
                   });
              }
          });

      });



}());


