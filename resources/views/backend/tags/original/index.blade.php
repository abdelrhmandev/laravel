@extends('backend.base.base')
@section('breadcrumbs')
<li class="breadcrumb-item text-dark">{{ __($trans.".plural") }}</li>
@stop
@section('style')
@if(app()->getLocale() === 'ar')
<link href="{{ asset('assets/backend/plugins/custom/datatables/datatables.bundle.rtl.css')}}" rel="stylesheet" type="text/css" />
@else
<link href="{{ asset('assets/backend/plugins/custom/datatables/datatables.bundle.css')}}" rel="stylesheet" type="text/css" />
@endif
@stop
@section('content')

<div class="container-xxl" id="kt_content_container">
  
  <form id="kt_ecommerce_edit_order_form" class="form d-flex flex-column flex-lg-row" data-kt-redirect="../../demo7/dist/apps/ecommerce/sales/listing.html">
    
    <div class="w-100 flex-lg-row-auto w-lg-300px mb-7 me-7 me-lg-10">
      
      <div class="card card-flush py-4">
  
        <div class="card-header">
          <div class="card-title">
            <h2>Order Details</h2>
          </div>
        </div>
     
        <div class="card-body pt-0">
          <div class="d-flex flex-column gap-10">
          
            <div class="fv-row">
            
              <label class="form-label">Order ID</label>
           
              
              <div class="fw-bold fs-3">#14223</div>
              
            </div>
          
            <div class="fv-row">
            
              <label class="required form-label">Payment Method</label>
           
              <select class="form-select mb-2" data-control="select2" data-hide-search="true" data-placeholder="Select an option" name="payment_method" id="kt_ecommerce_edit_order_payment">
                <option></option>
                <option value="cod">Cash on Delivery</option>
                <option value="visa">Credit Card (Visa)</option>
                <option value="mastercard">Credit Card (Mastercard)</option>
                <option value="paypal">Paypal</option>
              </select>
             
             
              <div class="text-muted fs-7">Set the date of the order to process.</div>
            
            </div>
        
            <div class="fv-row">
             
              <label class="required form-label">Shipping Method</label>
           
              <select class="form-select mb-2" data-control="select2" data-hide-search="true" data-placeholder="Select an option" name="shipping_method" id="kt_ecommerce_edit_order_shipping">
                <option></option>
                <option value="none">N/A - Virtual Product</option>
                <option value="standard">Standard Rate</option>
                <option value="express">Express Rate</option>
                <option value="speed">Speed Overnight Rate</option>
              </select>
           
              <div class="text-muted fs-7">Set the date of the order to process.</div>
           
            </div>
           
           
            <div class="fv-row">
         
              <label class="required form-label">Order Date</label>
          
              <input id="kt_ecommerce_edit_order_date" name="order_date" placeholder="Select a date" class="form-control mb-2" value="" />
          
              <div class="text-muted fs-7">Set the date of the order to process.</div>
            
            </div>
         
          </div>
        </div>
     
      </div>
  
    </div>
 
    <div class="d-flex flex-column flex-lg-row-fluid gap-7 gap-lg-10">
      <!--begin::Order details-->
      <div class="card card-flush py-4">
     
        <div class="card-header">
          <div class="card-title">
            <h2>Select Products</h2>
          </div>
        </div>
   
        <div class="card-body pt-0">
          <div class="d-flex flex-column gap-10">
          
            <div>
           
              <label class="form-label">Add products to this order</label>
           
              <div class="row row-cols-1 row-cols-xl-3 row-cols-md-2 border border-dashed rounded pt-3 pb-1 px-2 mb-5 mh-300px overflow-scroll" id="kt_ecommerce_edit_order_selected_products">
              
                <span class="w-100 text-muted">Select one or more products from the list below by ticking the checkbox.</span>
                
              </div>
  
            </div>
      
            <div class="separator"></div>
 
            <div class="d-flex align-items-center position-relative mb-n7">
           
              <span class="svg-icon svg-icon-1 position-absolute ms-4">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546" height="2" rx="1" transform="rotate(45 17.0365 15.1223)" fill="currentColor" />
                  <path d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z" fill="currentColor" />
                </svg>
              </span>
              <!--end::Svg Icon-->
              <input type="text" data-kt-ecommerce-edit-order-filter="search" class="form-control form-control-solid w-100 w-lg-50 ps-14" placeholder="Search Products" />
            </div>
            <!--end::Search products-->
            <!--begin::Table-->
            <table class="table align-middle table-row-dashed fs-6 gy-5" id="kt_ecommerce_edit_order_product_table">
              <!--begin::Table head-->
              <thead>
                <tr class="text-start text-gray-400 fw-bold fs-7 text-uppercase gs-0">
                  <th class="w-25px pe-2"></th>
                  <th class="min-w-200px">Product</th>
                  <th class="min-w-100px text-end pe-5">Qty Remaining</th>
                </tr>
              </thead>
        
              <tbody class="fw-semibold text-gray-600">
               
    
                <tr>        
                  <td>
                    <div class="form-check form-check-sm form-check-custom form-check-solid">
                      <input class="form-check-input" type="checkbox" value="1" />
                    </div>
                  </td>          
                  <td>
                    <div class="d-flex align-items-center" data-kt-ecommerce-edit-order-filter="product" data-kt-ecommerce-edit-order-id="product_2">                   
                      <a href="../../demo7/dist/apps/ecommerce/catalog/edit-product.html" class="symbol symbol-50px">
                        <span class="symbol-label" style="background-image:url(assets/media//stock/ecommerce/2.gif);"></span>
                      </a>                       
                      <div class="ms-5">                      
                        <a href="../../demo7/dist/apps/ecommerce/catalog/edit-product.html" class="text-gray-800 text-hover-primary fs-5 fw-bold">Product 2</a>              
                        <div class="fw-semibold fs-7">Price: $
                        <span data-kt-ecommerce-edit-order-filter="price">132.00</span></div>                
                        <div class="text-muted fs-7">SKU: 03921005</div>                     
                      </div>
                    </div>
                  </td>
 
                  <td class="text-end pe-5" data-order="25">
                    <span class="fw-bold ms-3">25</span>
                  </td>
                 
                </tr>

       
              </tbody>
         
            </table>
         
          </div>
        </div>
  
      </div>
 
 
    </div>
 
  </form>
 
</div>

@stop


@section('scripts')

<script src="{{ asset('assets/backend/js/custom/pdfMake/pdfmake.min.js')}}"></script> 
<script src="{{ asset('assets/backend/js/custom/pdfMake/vfs_load_fonts.js')}}"></script>
<script src="{{ asset('assets/backend/js/custom/pdfMake/pdfhandle.js')}}"></script>
<script src="{{ asset('assets/backend/plugins/custom/datatables/datatables.bundle.js')}}"></script>
@include('backend.datatables')
<script>

var dynamicColumns = [ //as an array start from 0
{ data: 'id', name: 'id',exportable:false}, 

{ data: 'translate.title', name: 'translate.title',orderable: false}, // 1

{ data: 'count', name: 'count',orderable: false,searchable: false}, 

{ data: 'created_at',name :'created_at', type: 'num', render: { _: 'display', sort: 'timestamp', order: 'desc'}}, // 6
{ data: 'actions' , name : 'actions' ,exportable:false,orderable: false,searchable: false},    
];
KTUtil.onDOMContentLoaded(function () {
  loadDatatable('{{ __($trans.".plural") }}','{{ $redirectRoute }}',dynamicColumns,'','1','3');
});
</script>

@stop
