export default {

    reloadPage(){
      location.reload()
    },
    MetisMenu(){
        $("#menu").metisMenu();
    },
    ValidateImageSize(fdata) {

      var maxSize = '1024';
       if (fdata && fdata[0]) {
        var fsize = fdata[0].size/1024;
        if(fsize > maxSize) {
           alert('Maximum file size exceed');
           return false;
        }
        else {
          return true;
        }
      }
    },
    ValidateImageDimension(fdata) {
      // Function used for Check image Dimensions
      let width = fdata.width
      let height = fdata.height
      alert('Wiodt'+width+'Height'+height)
    },
    Select2(){
        $(".ls-select2").select2();
    },
    Select2withoutSearch(){
        $(".ls-select2").select2({
            minimumResultsForSearch: Infinity
        });
    },
    DatePicker(){
        $('.ls-datepicker').datepicker({autoclose: true});
    },
    BootstrapSelect(){
        $(".ls-bootstrap-select").selectpicker({
            iconBase: 'fa',
            tickIcon: 'fa-check',
            container: 'body'
        });
    },


    initPlugins(plugins){
        plugins.forEach((plugin) => {
            if(this.isFunction(this[plugin])){
                this[plugin]();
            }
        })
    },

    isFunction(functionToCheck) {
        var getType = {};
        return functionToCheck && getType.toString.call(functionToCheck) === '[object Function]';
    },
}
