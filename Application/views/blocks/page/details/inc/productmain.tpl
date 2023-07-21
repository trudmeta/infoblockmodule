[{if isset($prepayment) && isset($pre_month) && isset($prepayment_month)}]
<div class="prepayment">
    <button type="button" class="button" data-toggle="modal" data-target="#infoblockModal">
        <span>Klicken sie hier</span>
    </button>
</div>

<style>
    .prepayment .button {
        color: #fff;
        cursor: pointer;
        font-size: 16px;
        font-weight: 400;
        line-height: 45px;
        margin: 0 0 2em;
        max-width: 160px;
        position: relative;
        text-decoration: none;
        text-transform: uppercase;
        width: 100%;
        background-color: #00748d;
        border-radius: 5px;
    }
    @media (min-width: 600px) {
        .prepayment .button {
            margin: 0 1em 2em;
        }
    }
    .prepayment .button:hover {
        text-decoration: none;
    }
    .prepayment .button {
        border: 1px solid;
        overflow: hidden;
        position: relative;
    }
    .prepayment .button span {
        z-index: 20;
    }
    .prepayment .button:after {
        background: #fff;
        content: "";
        height: 155px;
        left: -75px;
        opacity: 0.2;
        position: absolute;
        top: -50px;
        transform: rotate(35deg);
        transition: all 550ms cubic-bezier(0.19, 1, 0.22, 1);
        width: 50px;
        z-index: 1;
    }

    .prepayment .button:hover:after {
        left: 120%;
        transition: all 550ms cubic-bezier(0.19, 1, 0.22, 1);
    }

    .infoblockModal .card-title{
        padding-right: 20px;
        color: white;
    }

    .infoblockModal .modal-content{
        box-shadow: 0 27px 24px 0 rgba(0, 0, 0, 0.2), 0 40px 77px 0 rgba(0, 0, 0, 0.22);
        border-radius: 6px;
        border: none;
    }
    .infoblockModal .modal-header{
        border-bottom: none;
        padding-top: 24px;
        padding-right: 24px;
        padding-bottom: 0;
        padding-left: 24px;
    }

    .infoblockModal .modal-body {
        padding-top: 24px;
        padding-right: 24px;
        padding-bottom: 16px;
        padding-left: 24px;
        color: #3C4858;
    }

    .infoblockModal .modal-content .card-signup .modal-header {
        padding-top: 0;
    }

    .infoblockModal .modal-header .close {
        top: 10px;
        right: 10px;
        text-shadow: none;
        position: absolute;
        font-size: 16px;
        opacity: 1;
        width: 20px;
        height: 20px;
    }
    .infoblockModal .modal-header .close svg {
        color: black;
        fill: black;
        width: 100%;
        height: 100%;
    }

    .infoblockModal .modal-header .card-header .social-line {
        margin-top: 1rem;
        text-align: center;
        padding: 0;
    }

    .infoblockModal .card .card-title{
        color: #fff;
        font-size: 18px !important;
        font-weight: 700 !important;
        font-family: Roboto Slab,Times New Roman,serif;
        margin-top:10px;
    }

    .infoblockModal .card-header{
        border-radius: 3px !important;
        padding: 1rem 15px;
        margin-top: -40px;
        border: 0;
        width: 100%;
        position: relative;
    }
    .infoblockModal .card-header-primary {
        box-shadow: 0 5px 20px 0 rgba(0,0,0,.2), 0 13px 24px -11px rgba(156,39,176,.6);
        background: linear-gradient(60deg,#ab47bc,#7b1fa2)
    }

    .infoblockModal .modal-body {
        padding: 24px 24px 16px;
    }

    .infoblockModal .instruction {
        margin-bottom: 25px;
    }

    .infoblockModal .picture {
        height:87px !important;
        width:131px !important;
    }


    .infoblockModal img.rounded {
        border-radius: 6px !important;
    }

    .infoblockModal .img-fluid{
        width: 100% !important;
        height: 100% !important;
    }

    .infoblockModal strong{
        font-weight: 400 !important;
    }

    .infoblockModal .circular-chart {
        display: block;
        margin: 10px auto;
        max-width: 80%;
        max-height: 250px;
    }

    .infoblockModal .circle-bg {
        fill: none;
        stroke: #eee;
        stroke-width: 3.8;
    }

    .infoblockModal .circle {
        fill: none;
        stroke-width: 2.8;
        stroke-linecap: round;
        animation: progress 1s ease-out forwards;
    }

    @keyframes progress {
        0% {
            stroke-dasharray: 0 100;
        }
    }

    .infoblockModal .circular-chart.orange .circle {
        stroke: #ff9f00;
    }

    .infoblockModal .circular-chart.green .circle {
        stroke: #4CC790;
    }

    .infoblockModal .circular-chart.blue .circle {
        stroke: #3c9ee5;
    }

    .infoblockModal .percentage {
        fill: #666;
        font-family: sans-serif;
        font-size: 0.5em;
        text-anchor: middle;
    }

</style>


<div class="modal fade infoblockModal" id="infoblockModal" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-notice" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <div class="card-header card-header-primary text-center">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M24 20.188l-8.315-8.209 8.2-8.282-3.697-3.697-8.212 8.318-8.31-8.203-3.666 3.666 8.321 8.24-8.206 8.313 3.666 3.666 8.237-8.318 8.285 8.203z"/></svg>
                    </button>
                    <h4 class="card-title">
                        This product can be purchased with an advance payment of [{$prepayment}] euros and the balance to be paid within [{$pre_month}] months of [{$prepayment_month}] euros
                    </h4>
                </div>
            </div>
            <div class="modal-body">
                <div class="instruction">
                    <div class="row">
                        <div class="col-md-8">
                            <strong>Product price</strong>
                            [{if $oDetailsProduct->getFPrice()}]
                            <label id="productPrice" class="price">
                                [{assign var="oPrice" value=$oDetailsProduct->getPrice()}]
                                [{if $oDetailsProduct->isParentNotBuyable()}]
                                [{assign var="oPrice" value=$oDetailsProduct->getVarMinPrice()}]
                                [{/if}]
                                <span class="price">[{oxprice price=$oPrice currency=$currency}]</span>
                            </label>
                            [{/if}]
                        </div>
                        <div class="col-md-4">

                        </div>
                    </div>
                </div>
                <div class="instruction">
                    <div class="row">
                        <div class="col-md-8">
                            <strong>Prepayment - <span class="price">[{oxprice price=$prepayment currency=$currency}]</span></strong>
                            <p>[{$pre_month}] months of <span class="price">[{oxprice price=$prepayment_month currency=$currency}]</span> euros</p>
                        </div>
                        <div class="col-md-4">
                            <div class="picture">
                                <svg viewBox="0 0 36 36" class="circular-chart blue">
                                    <path class="circle-bg"
                                          d="M18 2.0845
                                              a 15.9155 15.9155 0 0 1 0 31.831
                                              a 15.9155 15.9155 0 0 1 0 -31.831"
                                    />
                                    <path class="circle"
                                          stroke-dasharray="100"
                                          d="M18 2.0845
                                          a 15.9155 15.9155 0 0 1 0 31.831
                                          a 15.9155 15.9155 0 0 1 0 -31.831"
                                    />
                                    <text x="18" y="20.35" class="percentage">100%</text>
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
[{/if}]

[{$smarty.block.parent}]