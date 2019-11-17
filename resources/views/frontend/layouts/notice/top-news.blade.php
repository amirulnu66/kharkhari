  <div class="container marq-inner" style="margin-bottom: 10px; margin-top: -.01px; margin-left: -15px">
    <table>
        <tr class="top-notice-bar">
            @if(settingsInfo()->notice)
            <td class="titleB">
                <marquee id="MainContent_topnews" style="color: Red; font-weight: bold;" scrollamount="2" onmouseover="this.setAttribute(&#39;scrollamount&#39;, 0, 0);" onmouseout="this.setAttribute(&#39;scrollamount&#39;, 2, 0);">
                    
                    <a href='javascript:' style="color:#1F527B; font-family:Verdana, SolaimanLipi;font-size:20px;">{{settingsInfo()->notice}} **&nbsp; &nbsp; </a>
                    

                </marquee>
            </td>
            @endif    
        </tr>
    </table>
</div>