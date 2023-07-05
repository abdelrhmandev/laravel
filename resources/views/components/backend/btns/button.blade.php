<div class="d-flex justify-content">
    <button type="submit" id="btn-submit" class="btn btn-primary me-5">
        <span class="indicator-label">{{ __('site.save') }}</span>
        <span class="indicator-progress">{{ __('site.please_wait')}}...
        <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
    </button>
    <button type="reset" id="cancel" class="btn btn-secondary me-5">{{ __('site.cancel') }}</button>
 


    @isset($destroyRoute)
  

 

   <button id="delete_item"
        data-back-list-text="{{ __('site.back_to_list') }}"        
        data-destroy-route = "{{ $destroyRoute }}"
        data-confirm-message = "{{ __('site.confirmDeleteMessage',['item'=>__($trans.'.singular')]) }}"
        data-confirm-button-text = "{{ __('site.confirmButtonText') }}"
        data-cancel-button-text = "{{ __('site.cancelButtonText') }}"
        data-confirm-button-textGotit = "{{ __('site.confirmButtonTextGotit') }}"
        data-delete-selected-records-text = "{{ __('site.delete_selected',['item'=>__($trans.'.singular')]) }}"
        data-redirect-url = "{{ $redirectRoute }}"
        data-deleting-selected-items = "{{ __('site.deletingItemMessage',['item'=>__($trans.'.singular')]) }}"
        data-not-deleted-message = "{{ __('site.notdeletedMessage',['item'=>__($trans.'.singular')]) }}"
        class="btn btn-danger font-weight-bold mr-2">
        {{ __('site.delete') }}
    </button> 
     
    @endisset
  



</div>