<div style="padding-top:10px;padding-top: 13px;padding-left: 0px;" class="container">
	<select class="btn pull-left col-lg-2">
	  <option>2010</option>
	  <option>2013</option>
	  <option>2009</option>
	  <option>2008</option>
	  <option>2007</option>
	</select>
</div>
<div id="links">
    <a href="{{URL::asset('assets_files/images/slider1.jpg')}}" title="Banana" data-gallery>
        <img src="{{URL::asset('assets_files/images/slider1.jpg')}}" alt="Banana">
    </a>
    <a href="{{URL::asset('assets_files/images/slider2.jpg')}}" title="Apple" data-gallery>
        <img src="{{URL::asset('assets_files/images/slider2.jpg')}}" alt="Apple">
    </a>
    <a href="{{URL::asset('assets_files/images/slider3.jpg')}}" title="Orange" data-gallery>
        <img src="{{URL::asset('assets_files/images/slider3.jpg')}}" alt="Orange">
    </a>
</div>
<!-- The Bootstrap Image Gallery lightbox, should be a child element of the document body -->
<div id="blueimp-gallery" class="blueimp-gallery">
    <!-- The container for the modal slides -->
    <div class="slides"></div>
    <!-- Controls for the borderless lightbox -->
    <h3 class="title"></h3>
    <a class="prev">‹</a>
    <a class="next">›</a>
    <a class="close">×</a>
    <a class="play-pause"></a>
    <ol class="indicator"></ol>
    <!-- The modal dialog, which will be used to wrap the lightbox content -->
    <div class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" aria-hidden="true">&times;</button>
                    <h4 class="modal-title"></h4>
                </div>
                <div class="modal-body next"></div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default pull-left prev">
                        <i class="glyphicon glyphicon-chevron-left"></i>
                        Previous
                    </button>
                    <button type="button" class="btn btn-primary next">
                        Next
                        <i class="glyphicon glyphicon-chevron-right"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>