@extends('layout.main')

@section('title', 'Shirts')

@section('content')


<!-- products listing -->
<!-- Latest SHirts -->
<div class="row">
    <div class="small-5 small-offset-1 columns">
        <div class="item-wrapper">
            <div class="img-wrapper">
                <a href="#">
                    <img src="http://i.imgur.com/Mcw06Yt.png"/>
                </a>
            </div>
        </div>
    </div>
    <div class="small-6 columns">
        <div class="item-wrapper">
            <h3 class="subheader">
                <span class="price-tag">$20</span> Mc-Mykey Designed Shirt
            </h3>
            <div class="row">
                <div class="large-12 columns">
                    <label>
                        Size
                        <select>
                            <option value="small">
                                S
                            </option>
                            <option value="small">
                                M
                            </option>
                            <option value="medium">
                                L
                            </option>
                            <option value="large">
                                XL
                            </option>

                        </select>
                    </label>
                    <label>
                        Color
                        <select>
                            <option value="small">
                                แดง
                            </option>
                            <option value="medium">
                                น้ำเงิน
                            </option>
                            <option value="large">
                                ขาว
                            </option>
                            <option value="small">
                                ดำ
                            </option>
                            <option value="medium">
                                ฟ้า
                            </option>
                            <option value="large">
                                เหลือง
                            </option>

                        </select>
                    </label>
                    <a href="#" class="button  expanded">Add to Cart</a>
                </div>
            </div>
            <p class="text-left subheader"><small>* Designed by <a href="https://www.youtube.com/webdevmatics">Webdevmatics</a></small></p>

        </div>
    </div>
</div>


@endsection