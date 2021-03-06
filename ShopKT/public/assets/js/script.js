$(".btn-submit").on("click", function(ev) {
   const form = $("#form_save");
   const data = form.serialize();

   $.ajax({
      type: "POST",
      url: "/save",
      data: data,
      dataType: "json",
      success: function(res) {
         if(res.errors) {
            form.find("span.text-danger").text('');
            form.find(".is-invalid").removeClass('is-invalid');
            form.find('.is-valid').removeClass('is-valid');

            $.each(res.errors, function(item, error) {
               const ele = form.find(`[name="${item}"]`);
               ele.addClass("is-invalid");
               ele.next().text(error[0]);
            });
         }
         if(res.success) {
            $("#modalOrder").modal("hide");
            $(".modal-backdrop").remove();
            form.trigger('reset');
            form.find("span.text-danger").text('');
            form.find(".is-invalid").removeClass('is-invalid');
            form.find('.is-valid').removeClass('is-valid');

            alert("Đặt mua thành công!");
         }
      }
   });
});