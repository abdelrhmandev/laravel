<div class="d-flex justify-content">
    <!--begin::Button-->
   
    <!--end::Button-->
    <!--begin::Button-->
    <button type="submit" id="btn-submit" class="btn btn-primary me-5">
        <span class="indicator-label">{{ __('site.save') }}</span>
        <span class="indicator-progress">{{ __('site.please_wait')}}...
        <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
    </button>


    <button type="reset" id="cancel" class="btn btn-secondary me-5">{{ __('site.cancel') }}</button>

    
    @if(isset($destroyRoute))
    {{-- <form id="DeleteItemForm" action="{{ $destroyRoute }}"> --}}
    {{-- @csrf --}}
    <a href="#" data-destroy-route="{{ $destroyRoute}}"  data-kt-table-filter="delete_row">
        {{ __('site.delete')}}    
      </a>
    {{-- <button type="submit" id="delete_btn_id" class="btn btn-danger me-5">{{ __('site.delete') }}</button> --}}
    {{-- </form> --}}
    @endif

    <!--end::Button-->
</div>