<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Invoice</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <style>
        .invoice-box {
            max-width: 800px;
            margin: auto;
            font-size: 14px;
            line-height: 18px;
            color: #555;
            box-shadow: 0px 5px 15px rgba(0, 0, 0, 0.1);;
        }

        body {
            font-family: 'Heebo', sans-serif;
        }

        .top {
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .top img {
            width: 150px;
        }

        .invoice {
            display: flex;
            align-items: center;
            width: 210px;
            font-size: 15px;
            justify-content: space-between;
            font-weight: 500;
            height: 25px;
        }

        .text-center {
            text-align: center;
        }

        .costomer {
            background: rgb(54, 54, 54);
            color: #fff;
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin-top: 50px;
            padding: 0 20px;
        }

        .costomer p:last-child {
            margin-right: 250px;
        }

        .table-one {
            display: flex;
            align-items: center;
            justify-content: space-between;
            background: #fff;
            padding: 0 20px 20px 20px;
            border: 1px solid #a9a9a9;
            margin-top: -10px;
        }

        .table-one .avery {
            width: 28%;
            margin-right: 100px;
        }

        .example {
            width: 30%;
        }

        .example h3 {
            font-size: 17px;
            height: 4px;
        }

        .avery h3 {
            width: 87%;
            margin-bottom: -13px;
        }

        .table-one p {
            font-size: 14px;
            font-weight: 500;
            margin-bottom: 0;
        }

        .table-one span {
            display: block;
            font-weight: 500;
        }

        .invoice-box table tr.item td {
            border-right: 1px solid #a9a9a9;
            border-bottom: 1px solid #a9a9a9;
            padding: 3px;
        }

        .invoice-box table tr.item.item-two td {
            border-right: 1px solid #fff;
            border-bottom: none;
        }

        .invoice-box table tr.item.item-three td {
            border-top: 1px solid #a9a9a9;
        }

        /** RTL **/
        .invoice-box.rtl {
            direction: rtl;
        }

        .table-two table thead {
            background: rgb(54, 54, 54);
            color: #fff;
        }

        .table-two thead th {
            padding: 6px;
        }

        .table-two table {
            width: 100%;
        }

        tr.item.heading-tow {
            background: #f8f8f8;
        }

        .invoice-box table tr.heading td {
            background: #363636;
            color: #fff;
            padding: 6px;
        }

        .status {
            border: 1px solid #a9a9a9;
            margin-top: 40px;
            display: flex;
            align-items: center;
        }

        .table-three {
            border-left: 1px solid #a9a9a9;
            width: 100%;
        }

        .invoice-box table tr.item-four td {
            border-right: 1px solid #a9a9a9;
            border-bottom: 1px solid #a9a9a9;
            text-align: end;
            padding: 5px;
        }

        .invoice-box table tr.item-four td:last-child {
            border-right: 1px solid #a9a9a9;
            border-bottom: 1px solid #a9a9a9;
            text-align: start;
            padding: 5px;
        }

        .invoice-box table tr.item-four th {
            height: 100px;
            border-right: 1px solid #a9a9a9;
            border-bottom: 1px solid #a9a9a9;
            text-align: end;
            padding: 5px;
        }

        .status-due span {
            display: block;
            font-size: 15px;
        }

        .status-due {
            padding-left: 0;
        }

        span.paid {
            margin-top: 1px;
        }

        .status-due h4 {
            color: white;
            text-align: center;
            background: #000;
            font-size: 18px;
            margin: 0 0 15px 0;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        .signertuer {
            margin: 10px;
        }

        .signertuer p {
            border-bottom: 1px solid #000;
            width: 400px;
            margin: 0;
        }

        .signertuer1 {
            margin: 10px;
        }

        .signertuer1 p {
            border-bottom: 1px solid #000;
            width: 100px;
            margin: 0;
        }

        .divider {
            line-height: 1.5715;
            color: #000000d9;
            border-top: 1px solid rgba(0, 0, 0, .7);
            margin: 30px 0;
        }

        .trem span {
            font-size: 13px;
            font-weight: 700;
            color: #000;
        }

        .trem p {
            color: #000;
        }

        .table-two td,
        .table-two th {
            padding: 8px;
            text-align: left;
            border: 1px solid #a9a9a9;
        }
        .description-column {
            width: 40%;
        }

        .item-column {
            width: 10%;
        }

        .unit-price-column {
            width: 15%;
        }

        .amount-column {
            width: 15%;
        }

        .blank-column {
            width: 20%;
        }
        .company-name{
            font-family: 'Brush Script MT', 'Lucida Handwriting', 'Cursive', 'Comic Sans MS', 'Monotype Corsiva', sans-serif;
            font-size: 48px;
            font-weight: normal;
            text-align: center;
            margin-top: 20px;
        }
        .underline:after{
            content: "";
            display: block;
            width: 90%;
            border-bottom: 1px solid #000;
            margin-left: 10px;
        }

    </style>
</head>

<body>

<div class="invoice-box">
    <table class="company-details" cellpadding="0" cellspacing="0" style="width: 100%">
        <tr>
            <td colspan="3" style="font-size: 30px; font-weight: bold;text-align: center">
                <span class="company-name">Style Home & Furniture Inc</span> <br>
            </td>
        </tr>
        <tr>
            <td colspan="3" style="text-align: center;">
                <h6 style="padding: 0;margin: 8px 0;font-size: 18px">Address{{ $company->address }}</h6>
                <h6 style="padding: 0;margin: 8px 0;font-size: 18px">Phone: 330-491-9907 | 234-322-1930</h6>
                <h6 style="padding: 0;margin: 2px 0;font-size: 14px">Website:stylehomefurniture.net </h6>
            </td>
            <td colspan="2" style="text-align: center;">
                <img src="{{ asset('images/mainlogo.JPG') }}" style="width: 100px;height:100px; margin-top: 5px;" />
            </td>
        </tr>
    </table>

    <table class="information" cellpadding="4px" cellspacing="0" style="margin-bottom: 20px;font-weight: bold">
        <tr>
            <td>
                Date: {{$order->order_date->format('m-d-y')}}
            </td>
            <td>
                ID: {{ $order->invoice_number }}
            </td>
        </tr>
        <tr>
            <td>
                Name: {{ $order->user->name }}
            </td>
            <td>
                Sales Person: {{ $order->staffMember->name }}
            </td>
        </tr>
        <tr>
            <td>
                Address: {{ $order->user->address }}
            </td>
            <td>
                Expected Delivery Date: {{ $order->delivery_date->format('m-d-y') }}
            </td>
        </tr>
        <tr>
            <td>
                Phone: {{ $order->user->phone }}
            </td>
        </tr>
        <tr>
            <td>
                Email: {{ $order->user->email }}
            </td>
        </tr>
    </table>

    <div class="table-two">
        <table cellpadding="4px" cellspacing="0">
            <tbody>
            <tr class="heading">
                <td class="item-column">#</td>
                <td class="item-column">ITEM STOCK#</td>
                <td class="description-column">Description</td>
                <td class="unit-price-column">Unit Price</td>
                <td class="amount-column">Amount</td>
                <td class="blank-column"></td>
            </tr>

            @foreach($order->items as $item)
                <tr class="item heading-tow">
                    <td class="item-column">{{ $item->quantity . ' ' . $item->unit->short_name }}</td>
                    <td class="item-column">{{ $item->product->item_code }}</td>
                    <td class="description-column">{{ $item->product->name }}</td>
                    <td class="unit-price-column">{{ App\Classes\Common::formatAmountCurrency($company->currency, $item->single_unit_price) }}</td>
                    <td class="amount-column">{{ App\Classes\Common::formatAmountCurrency($company->currency, $item->subtotal) }}</td>
                    <td class="blank-column"></td> <!-- Blank column -->
                </tr>
            @endforeach

            <tr class="item heading-tow">
                <td colspan="3" rowspan="7" style="border-left: 1px solid #a9a9a9;padding: 0; position: relative">
                    <div style="background: #363636;color: white;text-align: center; padding: 4px;position: absolute;top: 0;width: 98%">
                        AGREEMENT
                    </div>
                    <ol style="margin-top: 40px">
                        <li>No money refunds.All purchases are final.</li>
                        <li>No exchange or special orders.</li>
                        <li>No cancellation on orders once contract is signed.</li>
                        <li>Exchanges not permitted after delivery.</li>
                        <li>Store or drivers are not responsible for clean-up (old furniture removal in customer house).</li>
                        <li>Buyer must pay a fee ($150) for dissembling or a adjusting each piece</li>
                        <li>Buyer must pay ad additional $25 per floor in case walk-up is necessary</li>
                        <li>Buyer is responsible for all measurements</li>
                        <li>complains are waved if not reported to the above address by certified mail or registered mail within 72 hours of delivery</li>
                        <li>By signing below buyer agrees to all terms and conditions</li>
                    </ol>
                    <div class="underline" style="margin-bottom: 32px;margin-left: 16px;margin-top: 16px">
                        x
                    </div>
                </td>
                <td rowspan="7" style="max-width: 300px;">
                    <div style="text-align: center">BUYER AUTHORIZES THE ABOVE MERCHANDISE TO BE ORDERED</div>
                    <div style="text-align: center;margin-top: 16px">BUYER ACKNOWLEDGES RECEIVING A TRUE COPY OF THIS ORDER</div>
                    <div class="underline" style="margin-top: 24px">
                        x
                    </div>
                    <div style="text-align: center;margin-top: 16px">RECEIVED MERCHANDISE IN GOOD CONDITION</div>
                    <div class="underline" style="margin-top: 24px">
                        x
                    </div>
                </td>
                <td style="text-transform: uppercase;font-weight: bold;">
                    Sub-total
                </td>
                <td style="font-weight: bold;">
                    {{ App\Classes\Common::formatAmountCurrency($company->currency, $order->subtotal) }}
                </td>
            </tr>
            <tr class="item heading-tow" style="text-transform: uppercase;font-weight: bold;">
                <td>
                    Delivery Charge
                </td>
                <td>
                    {{ App\Classes\Common::formatAmountCurrency($company->currency, $order->shipping ?? 0) }}
                </td>
            </tr>
            <tr class="item heading-tow" style="text-transform: uppercase;font-weight: bold;">
                <td>
                    Set Up
                </td>
                <td>
                    {{ App\Classes\Common::formatAmountCurrency($company->currency, $order->setup) }}
                </td>
            </tr>
            <tr  class="item heading-tow" style="text-transform: uppercase;font-weight: bold;">
                <td>
                    Pickup Fee
                </td>
                <td>
                    {{ App\Classes\Common::formatAmountCurrency($company->currency, $order->pickup) }}
                </td>
            </tr>
            <tr  class="item heading-tow" style="text-transform: uppercase;font-weight: bold;">
                <td>
                    Sales Tax
                </td>
                <td>
                    {{ App\Classes\Common::formatAmountCurrency($company->currency, $order->tax_amount) }}
                </td>
            </tr>
            <tr  class="item heading-tow" style="text-transform: uppercase;font-weight: bold;">
                <td>
                    Deposit
                </td>
                <td>
                    {{ App\Classes\Common::formatAmountCurrency($company->currency, $order->paid_amount) }}
                </td>
            </tr>
            <tr  class="item heading-tow" style="text-transform: uppercase;font-weight: bold;">
                <td>
                    Balance Due
                </td>
                <td>
                    {{ App\Classes\Common::formatAmountCurrency($company->currency, $order->due_amount) }}
                </td>
            </tr>
            <!-- Add the Total Row here after Balance Due -->
            <tr class="item heading-tow" style="text-transform: uppercase;font-weight: bold;">
                <td colspan="4" style="border-left: 1px solid #a9a9a9;"></td> <!-- Added left border here -->
                <td style="text-transform: uppercase; font-weight: bold; border-left: 1px solid #a9a9a9;">TOTAL</td> <!-- Added left border here -->
                <td style="font-weight: bold; border-left: 1px solid #a9a9a9;">
                    {{ App\Classes\Common::formatAmountCurrency($company->currency, $order->total) }}
                </td>
            </tr>

            </tbody>
        </table>

    </div>
</div>
</body>

</html>
