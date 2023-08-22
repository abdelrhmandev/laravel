<div id="{{ __($trans.'.plural') }}_example_1_export" class="d-none"></div>
<!--end::Export buttons-->
<div>
   <button type="button" class="btn btn-light-primary me-3" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
      <!--begin::Svg Icon | path: icons/duotune/arrows/arr078.svg-->
      <span class="svg-icon svg-icon-2">
         <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <rect opacity="0.3" x="12.75" y="4.25" width="12" height="2" rx="1" transform="rotate(90 12.75 4.25)" fill="currentColor" />
            <path d="M12.0573 6.11875L13.5203 7.87435C13.9121 8.34457 14.6232 8.37683 15.056 7.94401C15.4457 7.5543 15.4641 6.92836 15.0979 6.51643L12.4974 3.59084C12.0996 3.14332 11.4004 3.14332 11.0026 3.59084L8.40206 6.51643C8.0359 6.92836 8.0543 7.5543 8.44401 7.94401C8.87683 8.37683 9.58785 8.34458 9.9797 7.87435L11.4427 6.11875C11.6026 5.92684 11.8974 5.92684 12.0573 6.11875Z" fill="currentColor" />
            <path opacity="0.3" d="M18.75 8.25H17.75C17.1977 8.25 16.75 8.69772 16.75 9.25C16.75 9.80228 17.1977 10.25 17.75 10.25C18.3023 10.25 18.75 10.6977 18.75 11.25V18.25C18.75 18.8023 18.3023 19.25 17.75 19.25H5.75C5.19772 19.25 4.75 18.8023 4.75 18.25V11.25C4.75 10.6977 5.19771 10.25 5.75 10.25C6.30229 10.25 6.75 9.80228 6.75 9.25C6.75 8.69772 6.30229 8.25 5.75 8.25H4.75C3.64543 8.25 2.75 9.14543 2.75 10.25V19.25C2.75 20.3546 3.64543 21.25 4.75 21.25H18.75C19.8546 21.25 20.75 20.3546 20.75 19.25V10.25C20.75 9.14543 19.8546 8.25 18.75 8.25Z" fill="currentColor" />
         </svg>
      </span>
      <!--end::Svg Icon-->{{ __('admin.export') }} 
   </button>
   <!--begin::Menu-->
 
   <div data-export-file-alert-msg="{{ __($trans.'.exportMessageSuccess') }}" data-export-file-title="{{ __($trans.'.plural') }}" id="{{ __($trans.'.plural') }}_export_menu" class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-200px py-4" data-kt-menu="true">
      <div class="menu-item px-3"><a href="#" class="menu-link px-3" data-kt-export="copy"> <span class="navi-icon">
         <i class="la la-copy fs-2x  text-info"></i>


         
      </span>   {{ __('admin.copy') }}</a></div>
      <div class="menu-item px-3"><a href="#" class="menu-link px-3" data-kt-export="excel"> <span class="navi-icon">
         <i class="la la-file-excel-o fs-2x  text-primary"></i>
      </span>   {{ __('admin.excel') }}</a></div>
      <div class="menu-item px-3"><a href="#" class="menu-link px-3" data-kt-export="csv"> <span class="navi-icon">
         <i class="la la-file-text-o fs-2x  text-success"></i>
      </span>   {{ __('admin.csv') }}</a></div>
      <div class="menu-item px-3"><a href="#" class="menu-link px-3" data-kt-export="pdf"> <span class="navi-icon">
         <i class="la la-file-pdf-o fs-2x  text-danger"></i>
      </span>   {{ __('admin.pdf') }}</a></div>
   </div>
   <div id="{{ __($trans.'.plural') }}_buttons" class="d-none"></div>
</div>
