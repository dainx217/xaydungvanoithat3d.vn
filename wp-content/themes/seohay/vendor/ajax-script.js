(function($){
    $(document).ready(function(){
        $( "#Tracuu" ).click(function() {

            /* Act on the event */
            data = {
         action: "laykq", //Tên action
         gioitinh : jQuery('select[name="gioitinh"]').val(),
         namsinh   :jQuery('select[name="namsinh"]').val(),
         huong :jQuery('select[name="huong"]').val(),
         huongtext :jQuery('select[name="huong"]').find(':selected').text()
     };
     $.ajax({
         url: WPURLS.siteurl, // AJAX handler
         data: data,
         dataType : "json",
         type: 'POST',

         beforeSend: function(xhr) {

          console.log('ajax chay');
           // change the button text, you can also add a preloader image
       },
       success: function(data) {
         console.log(data);
        if (data) {

          $('#loadpost1').html(data.data);
      }
  }
});
 });

    })
})(jQuery);

(function($){
    $(document).ready(function(){
        $( "#xemnam" ).click(function() {

            /* Act on the event */
            data = {
         action: "xemkq", //Tên action
         namsinhxay : jQuery('select[name="namsinhxay"]').val(),
         gioitinhxay : jQuery('select[name="gioitinhxay"]').val(),
         namxay : jQuery('select[name="namxay"]').val()
     };
     $.ajax({
         url: WPURLS.siteurl, // AJAX handler
         data: data,
         dataType : "json",
         type: 'POST',

         beforeSend: function(xhr) {

          console.log('ajax chay ngay đi');
           // change the button text, you can also add a preloader image
       },
       success: function(data) {
         console.log(data);
        if (data) {

          $('#xemnamxay').html(data.data);
      }
  }
});
 });

    })
})(jQuery);

(function($) {
  $(document).ready(function() {
    $( "select[name='tinh_tp']" ).change(function() {
      console.log($(this).find(':selected').attr('data-idp')) ; // lấy data idp
      data = {
        'action': 'ajax_danhmuc', //tên action ajax
        'id' :$(this).find(':selected').attr('data-idp')
      };
      $.ajax({
         url: WPURLS.siteurl, 
         data: data,
         dataType : "json",
         type: 'POST',
         beforeSend: function(xhr) {
          console.log('ajax chay');
           
       },
       success: function(data) {
        if (data) {
          console.log(data);
          $('select[name="xa_huyen"]').html(data.data);//in dữ liệu vào select này
        }
       }
   });
    });
  })
})(jQuery);

(function($){
    $(document).ready(function(){
        $( "#dutoan" ).click(function() {

            /* Act on the event */
            data = {
         action: "laydutoan", //Tên action
         loainha : jQuery('select[name="loainha"]').val(),
         loainhatext :jQuery('select[name="loainha"]').find(':selected').text(),
         giaidoan   :jQuery('select[name="giaidoan"]').val(),
         giaidoantext :jQuery('select[name="giaidoan"]').find(':selected').text(),
         
         tinh_tp   :jQuery('select[name="tinh_tp"]').val(),
         tinh_tptext :jQuery('select[name="tinh_tp"]').find(':selected').text(),
         xa_huyen   :jQuery('select[name="xa_huyen"]').val(),
         xa_huyentext :jQuery('select[name="xa_huyen"]').find(':selected').text(),
         //huong :jQuery('select[name="huong"]').val(),
         //huongtext :jQuery('select[name="huong"]').find(':selected').text()
          dientich : $('#dientich').val(),
          sotang : $('#sotang').val(),
     };
     $.ajax({
         url: WPURLS.siteurl, // AJAX handler
         data: data,
         dataType : "json",
         type: 'POST',

         beforeSend: function(xhr) {

          console.log('ajax chay');
           // change the button text, you can also add a preloader image
       },
       success: function(data) {
         console.log(data);
        if (data) {

          $('#indutoan').html(data.data);
      }
  }
});
 });

    })
})(jQuery);


(function($){
    $(document).ready(function(){
        $( "#khung .khunghinh" ).click(function() {
           console.log($(this).attr('data-idp')) ;
                data = {
        'action': 'xemhinhanh', //tên action ajax
        'id' :$(this).attr('data-idp'),
      };
      $.ajax({
         url: WPURLS.siteurl, 
         data: data,
         dataType : "json",
         type: 'POST',
         beforeSend: function(xhr) {
          console.log('ajax chay');
           
       },
       success: function(data) {
        if (data) {
          console.log(data);
          $('#xemhinhanh').html(data.data);//in dữ liệu vào select này
        }
       }
   });

 });

    })
})(jQuery);

