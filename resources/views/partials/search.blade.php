<div class="body-popup-modal-area">
    <span class="modal-close"><img src="{{asset('assets/img/cancel.png')}}" alt="Close" class="img-fluid"/></span>
    <div class="modal-container d-flex">
        <div class="search-box-area">
            <div class="search-box-form">
                <form action="route('search.result')" method="post">
                    <input type="text" name="search" placeholder="type keyword and hit enter"/>
                    <input type="submit" class="btn" name="find" type="submit"><i class="fa fa-search"></i></button>
                </form>
            </div>
        </div>
    </div>
</div>
