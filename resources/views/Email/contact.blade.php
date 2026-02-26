@component('mail::message')
    <p style="border-collapse: collapse; table-layout: fixed; width: 1000px;">
        Hi,<br />
        New enquiry has been initiated on The OEM Used Car Parts
        <br />
        Following are the contact enquiry details.
    </p>
    <table style="border-collapse: collapse; table-layout: fixed; width: 1000px;">
        <tbody>
            @if (isset($data['name']))
                <tr>
                    <td style="border: 1px solid black; padding: 10px; width: 100px; overflow: hidden;"><b>Full Name</b></td>
                    <td style="border: 1px solid black; padding: 10px;"><b>&nbsp;&nbsp;{!! $data['name'] !!}</b></td>
                </tr>
            @endif
            @if (isset($data['full_name']))
                <tr>
                    <td style="border: 1px solid black; padding: 10px; width: 100px; overflow: hidden;"><b>Full Name</b></td>
                    <td style="border: 1px solid black; padding: 10px;"><b>&nbsp;&nbsp;{!! $data['full_name'] !!}</b></td>
                </tr>
            @endif
            <tr>
                <td style="border: 1px solid black; padding: 10px; width: 100px; overflow: hidden;"><b>Email-Id</b></td>
                <td style="border: 1px solid black; padding: 10px;"><b>&nbsp;&nbsp;{!! $data['email'] !!}</b></td>
            </tr>
            @if (isset($data['mobile']))
                <tr>
                    <td style="border: 1px solid black; padding: 10px; width: 100px; overflow: hidden;"><b>Mobile</b></td>
                    <td style="border: 1px solid black; padding: 10px;"><b>&nbsp;&nbsp;{!! $data['mobile'] !!}</b></td>
                </tr>
            @endif
            @if (isset($data['zip']))
                <tr>
                    <td style="border: 1px solid black; padding: 10px; width: 100px; overflow: hidden;"><b>Zip Code</b></td>
                    <td style="border: 1px solid black; padding: 10px;"><b>&nbsp;&nbsp;{!! $data['zip'] !!}</b></td>
                </tr>
            @endif
            @if (isset($data['vehicle_model']))
                <tr>
                    <td style="border: 1px solid black; padding: 10px; width: 100px; overflow: hidden;"><b>Vehicle Model</b>
                    </td>
                    <td style="border: 1px solid black; padding: 10px;"><b>&nbsp;&nbsp;{!! $data['vehicle_model'] !!}</b></td>
                </tr>
            @endif
            @if (isset($data['vehicle_year']))
                <tr>
                    <td style="border: 1px solid black; padding: 10px; width: 100px; overflow: hidden;"><b>Vehicle Year</b>
                    </td>
                    <td style="border: 1px solid black; padding: 10px;"><b>&nbsp;&nbsp;{!! $data['vehicle_year'] !!}</b></td>
                </tr>
            @endif
            @if (isset($data['vehicle_model']))
                <tr>
                    <td style="border: 1px solid black; padding: 10px; width: 100px; overflow: hidden;"><b>Part Name</b>
                    </td>
                    <td style="border: 1px solid black; padding: 10px;"><b>&nbsp;&nbsp;{!! $data['vehicle_model'] !!}</b></td>
                </tr>
            @endif
            @if (isset($data['make']))
                <tr>
                    <td style="border: 1px solid black; padding: 10px; width: 100px; overflow: hidden;"><b>Make</b></td>
                    <td style="border: 1px solid black; padding: 10px;"><b>&nbsp;&nbsp;{!! $data['make'] !!}</b></td>
                </tr>
            @endif
            @if (isset($data['enquiry_type']))
                <tr>
                    <td style="border: 1px solid black; padding: 10px; width: 100px; overflow: hidden;"><b>Enquiry Type</b>
                    </td>
                    <td style="border: 1px solid black; padding: 10px;"><b>&nbsp;&nbsp;{!! $data['enquiry_type'] !!}</b></td>
                </tr>
            @endif
            @if (isset($data['subject']))
                <tr>
                    <td style="border: 1px solid black; padding: 10px; width: 100px; overflow: hidden;"><b>Subject
                            Type</b>
                    </td>
                    <td style="border: 1px solid black; padding: 10px;"><b>&nbsp;&nbsp;{!! $data['subject'] !!}</b></td>
                </tr>
            @endif
            @if (isset($data['message']))
                <tr>
                    <td style="border: 1px solid black; padding: 10px; width: 100px; overflow: hidden;"><b>Message</b>
                    </td>
                    <td style="border: 1px solid black; padding: 10px;"><b>&nbsp;&nbsp;{!! $data['message'] !!}</b></td>
                </tr>
            @endif
        </tbody>
    </table>
    <br />
    <br /><br />
    Thankyou,<br>
    Sales Team.<br />
    OEM Used Car Parts<br />
@endcomponent
