@props(['url'])
<tr>
    <td class="header">
        <a href="{{ $url }}" style="display: inline-block;">
            @if (trim($slot) === 'Laravel')
               <img src="https://oemusedcarpart.com/frontend/my-img/footer-logo.png"
                alt="OEM Logo"
                width="200"
                style="display: block !important;
                        width: 200px !important;
                        height: auto !important;
                        max-width: 200px !important;
                        border: 0 !important;
                        outline: none !important;
                        text-decoration: none !important;
                        -ms-interpolation-mode: bicubic;">
            @else
                {{ $slot }}
            @endif
        </a>
    </td>
</tr>
