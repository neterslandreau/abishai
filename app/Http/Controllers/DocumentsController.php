<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;

class DocumentsController extends Controller
{
    public function index($seller = 'Lennar', $customerline='Customer')
    {
$html = '
    <table>
        <tr>
            <td style="width:30%"><h3>REFERRING PARTY/SELLER:</h3></td>
            <td style="border-bottom: 1px solid #000000;width:68%">'.$seller.'</td>
        </tr>
        <tr>
            <td style="width:30%"><h3>CUSTOMER:</h3></td>
            <td style="border-bottom: 1px solid #000000;width:68%">'.$customerline.'</td>
        </tr>    
    </table>

    <p align="justify">This is to give notice that Referring Party/Seller (Seller)  has business relationships with the following companies: Eagle Home Mortgage, LLC, North American Title Company, North American Title Insurance Company, North American Advantage Insurance Services, LLC, Lennar Homes, LLC, Classic American Homes, Inc., Classic American Homes, Fiddler’s Residential, LLC, Len-Hawks Point, LLC, Providence Lakes, LLP, Flordade LLC, Bellagio Lennar, LLC, Hammocks Lennar, LLC, Venetian Lennar, LLC, Lennar Courts, LLC, LEN OT Holdings, LLC, LEN-CG South, LLC, LEN Paradise Operating, LLC, RL Regi-FL Pasco County, LLC, Concord Station, LLP, U.S. Home Corporation, Rutenberg Homes, WCI Communities, LLC, Watermark Realty, Inc., d/b/a Berkshire Hathaway HomeServices Florida Realty, d/b/a BHHS Florida Realty, d/b/a Florida Title & Guarantee Agency and Watermark Realty Referral, Inc., and each of these companies is, directly or indirectly, wholly owned by Lennar Corporation.  Because of these relationships, this referral of services may provide Seller a financial or other benefit.</p>

    <p align="justify">Set forth below are the types of settlement services offered by these affiliated companies and the estimated charge or range of charges generally required by these companies for such settlement services. You are NOT required to use any of the companies listed above as a condition for purchase of the subject property.</p>   

    <p align="justify">THERE ARE FREQUENTLY OTHER SETTLEMENT SERVICE PROVIDERS AVAILABLE WITH SIMILAR SERVICES. YOU ARE FREE TO SHOP AROUND TO DETERMINE THAT YOU ARE RECEIVING THE BEST SERVICES AND THE BEST RATE FOR THESE SERVICES.</p>

    <p align="center"><strong>Provider and Settlement Services/ Estimated Range of Charges</strong></p>
   
    <div style="border: 1px solid #000000">
        <table>
            <tr>
                <td colspan="1"></td>
            </tr>
            <tr>
                <td colspan="1" align="center"><h3><u>MORTGAGE</u></h3></td>
            </tr>
            <tr>
                <td colspan="1"></td>
            </tr>
            <tr>
                <td style="width:2%"></td>
                <td style="width:95%">Eagle Home Mortgage, LLC arranges and makes mortgage loans and the following are estimated mortgage loan related charges or range of charges (not all of the charges may apply):</td>
            </tr>
            <tr>
                <td colspan="1" align="center"></td>
            </tr>
        </table>

        <strong>
            <table colspace="0" colpadding="0">
                <tr>
                    <td style="width:15%"></td>
                    <td style="width:35%"><u>Description of Fee</u></td>
                    <td style="width:15%"></td>
                    <td><u>Range of Cost</u></td>
                </tr>
                <tr>
                    <td></td>
                    <td><p>Origination Charges</p></td>
                    <td></td>
                    <td></td>
                </tr>    
                <tr>
                    <td></td>
                    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;% of Loan Amount (Points)   </td>
                    <td></td>
                    <td>0%  -   4%  (of the loan amount)</td>
                </tr>    
                <tr>
                    <td></td>
                    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Courier/Messenger Fee</td>
                    <td></td>
                    <td>$    0  -   $   100</td>
                </tr>    
                <tr>
                    <td></td>
                    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Document Preparation Fee</td>
                    <td></td>
                    <td>$    0  -   $   500</td>
                </tr>    
                <tr>
                    <td></td>
                    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Origination Fee</td>
                    <td></td>
                    <td>0%  -   1%  (of the loan amount)</td>
                </tr>    
                <tr>
                    <td></td>
                    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Processing Fee</td>
                    <td></td>
                    <td>$    0  -   $   500 </td>
                </tr>    
                <tr>
                    <td></td>
                    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Underwriting Fee</td>
                    <td></td>
                    <td>$    0  -   $   500</td>
                </tr>    
                <tr>
                    <td></td>
                    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Wire Transfer Fee</td>
                    <td></td>
                    <td>$    0  -   $   100 </td>
                </tr>    
                <tr>
                    <td></td>
                    <td>Appraisal Fee Paid to Appraiser</td>
                    <td></td>
                    <td>$700    -   $1,000  </td>
                </tr>    
                <tr>
                    <td></td>
                    <td>Credit Report Fee Paid to Outside Agency</td>
                    <td></td>
                    <td>$  12   -   $   200</td>
                </tr>    
                <tr>
                    <td></td>
                    <td>Survey Fee Paid to Outside Agency</td>
                    <td></td>
                    <td>$200    -       $   942</td>
                </tr>    
            </table>
        </strong>

        <table>
            <tr>
                <td style="width:1.5%"></td>
                <td style="width:92%"></td>
            </tr>
            <tr>
                <td style="width:1.5%"></td>
                <td style="width:92%">The actual fees charged may vary based on the size of your loan, loan program and interest rate you choose. There also will be other third party charges.  You will receive a Loan Estimate when you apply for your mortgage loan that will give you an estimate of all anticipated charges.</td>
            </tr>
        </table>
    </div>

    <div style="border: 1px solid #000000">
        <table>
            <tr>
                <td colspan="1"></td>
            </tr>
            <tr>
                <td colspan="1" align="center"><h3><u>INSURANCE</u></h3></td>
            </tr>
            <tr>
                <td colspan="1"></td>
            </tr>
            <tr>
                <td style="width:2%"></td>
                <td style="width:95%">North American Advantage Insurance Services, LLC (NAAIS) is an insurance agent that provides, among other products, homeowner’s/hazard and flood insurance.  Set forth below is the estimated range of charges by NAAIS for the settlement services listed.</td>
            </tr>
        </table>
        

        <strong>
            <table>
                <tr>
                    <td style="width:20%"></td>
                    <td>Settlement Service</td>
                    <td>Range of Charges - Annual Premium</td>
                </tr>
                <tr>
                    <td style="width:20%"></td>
                    <td>Hazard Insurance</td>
                    <td>.2% - 2.5% of Home Price</td>
                </tr>    
                <tr>
                    <td style="width:20%"></td>
                    <td>Flood Insurance</td>
                    <td>.1% - .5% of Home Price</td>
                </tr>    
            </table>
        </strong>

        <table>
            <tr>
                <td colspan="1"></td>
            </tr>
            <tr>
                <td style="width:2%"></td>
                <td style="width:95%"><u>NOTE</u>:<br>The above is a premium range for hazard and flood insurance.  If enhancements to the standard policy such as increased limits, scheduled articles, and/or earthquake coverage are required, the premium may increase. Actual quote and acceptance by NAAIS is subject to NAAIS’ application of its underwriting guidelines, including but not limited to verification of your credit score and previous loss history.</td>
            </tr>
            <tr>
                <td colspan="1"></td>
            </tr>
            <tr>
                <td style="width:2%"></td>
                <td style="width:95%">Of course, the cost of your insurance may vary due to many factors including, without limitation, the size, location and cost of your home.</td>
            </tr>
        </table>
    </div>
';

		PDF::SetMargins(10, 15, 10);
		PDF::SetHeaderMargin(0);
		PDF::SetFooterMargin(PDF_MARGIN_FOOTER);

		// set auto page breaks
		PDF::SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);

		// set image scale factor
		PDF::setImageScale(PDF_IMAGE_SCALE_RATIO);

		// add a page
		PDF::SetMargins(10, 15, 10);
		PDF::SetFont('Helvetica', '', 9);
		PDF::AddPage();
		PDF::SetLineStyle( array( 'width' => 0.40, 'color' => array(0, 0, 0)));
		PDF::Line(5, 5, PDF::getPageWidth()-5, 5); 
		PDF::Line(PDF::getPageWidth()-5, 5, PDF::getPageWidth()-5,  PDF::getPageHeight()-5);
		PDF::Line(5, PDF::getPageHeight()-5, PDF::getPageWidth()-5, PDF::getPageHeight()-5);
		PDF::Line(5, 5, 5, PDF::getPageHeight()-5);
		PDF::writeHTML($html, true, false, true, false, 'I');

		PDF::Output('hello_world.pdf');
   }

    public function abad($district)
    {

    }
}
