@if (\Session::has('success'))
<div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
    <div class="alert alert-success text-center" style="display: block">
        <h4>{!! \Session::get('success') !!}</h4>
    </div>
</div>
@endif
<a href="javascript:;" class="btn btn-primary" id="showtoast">Show Toast</a>

@push('scripts')
<script>
    "use strict";

// Class definition
var KTToastrDemo = (function() {
  // Private functions

  // basic demo
  var demo = function() {
    var i = -1;
    var toastCount = 0;
    var $toastlast;

    $("#showtoast").click(function() {
      var shortCutFunction = "success";
      var msg = "Berhasil delete blog";
      var title = "Success";
      var $showDuration = "300";
      var $hideDuration = "1000";
      var $timeOut = "5000";
      var $extendedTimeOut = "1000";
      var $showEasing = "swing";
      var $hideEasing = "linear";
      var $showMethod = "fadeIn";
      var $hideMethod = "fadeOut";
      var toastIndex = toastCount++;

      toastr.options = {
        onclick: null,
        closeButton: true,
        debug: false,
        newestOnTop: false,
        progressBar: false,
        positionClass: "toast-top-right",
        preventDuplicates: false,
        onclick: null,
        showDuration: "300",
        hideDuration: "1000",
        timeOut: "5000",
        extendedTimeOut: "1000",
        showEasing: "swing",
        hideEasing: "linear",
        showMethod: "fadeIn",
        hideMethod: "fadeOut"
      };

      if ($("#addBehaviorOnToastClick").prop("checked")) {
        toastr.options.onclick = function() {
          alert("You can perform some custom action after a toast goes away");
        };
      }

      $("#toastrOptions").text(
        "toastr.options = " +
          JSON.stringify(toastr.options, null, 2) +
          ";" +
          "\n\ntoastr." +
          shortCutFunction +
          '("' +
          msg +
          (title ? '", "' + title : "") +
          '");'
      );

      var $toast = toastr[shortCutFunction](msg, title); // Wire up an event handler to a button in the toast, if it exists
      $toastlast = $toast;

      if (typeof $toast === "undefined") {
        return;
      }

      if ($toast.find("#okBtn").length) {
        $toast.delegate("#okBtn", "click", function() {
          alert("you clicked me. i was toast #" + toastIndex + ". goodbye!");
          $toast.remove();
        });
      }
      if ($toast.find("#surpriseBtn").length) {
        $toast.delegate("#surpriseBtn", "click", function() {
          alert(
            "Surprise! you clicked me. i was toast #" +
              toastIndex +
              ". You could perform an action here."
          );
        });
      }
      if ($toast.find(".clear").length) {
        $toast.delegate(".clear", "click", function() {
          toastr.clear($toast, { force: true });
        });
      }
    });

    function getLastToast() {
      return $toastlast;
    }
    $("#clearlasttoast").click(function() {
      toastr.clear(getLastToast());
    });
    $("#cleartoasts").click(function() {
      toastr.clear();
    });
  };

  return {
    // public functions
    init: function() {
      demo();
    }
  };
})();

jQuery(document).ready(function() {
  KTToastrDemo.init();
});

</script>
@endpush