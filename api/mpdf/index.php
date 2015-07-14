<?php

//collect form data

$postdata = file_get_contents("php://input");
$request = json_decode($postdata);
@$table_name = $request->table_name;
@$contact = $request->contact;
@$company_name = $request->company_name;
@$customer_name = $request->customer_name;
@$address1 = $request->address1;
@$address2 = $request->address2;
@$address3 = $request->address3;
@$address4 = $request->address4;
@$county = $request->county;
@$postcode = $request->postcode;
@$telephone = $request->telephone;
@$email = $request->email;
@$lob = $request->advert_cat;
@$distribution = $request->distribution;
@$mailing_id = $request->mailing_id;
@$send_date = $request->send_date;
@$mailing_name = $request->mailing_name;
@$date_design_required = $request->date_design_required;
@$order_value = $request->order_value;
@$design_option = $request->design_option;
@$existing_MD_cust = $request->existing_MD_cust;

    /*
    $contact  = $array["contact"]; 
    $company_name   = $array["company_name"];
    $customer_name  = $array["customer_name"]; 
    $address1  = $array["address1"]; 
    $address2  = $array["address2"];
    $address3 = $array["address3"];
    $address4 = $array["address4"]; 
    $county = $array["county"]; 
    $postcode  = $array["postcode"]; 
    $telephone = $array["telephone"];
    $email   = $array["email"]; 
    $lob = $array["lob"]; 
    $distribution  = $array["distribution"]; 
    $mailing_id   = $array["mailing_id"];
    $send_date = $array["send_date"]; 
    $mailing_name = $array["mailing_name"]; 
    $date_design_required  = $array["date_design_required"]; 
    $order_value = $array["order_value"]; 
    $design_option = $array["design_option"];
*/
$header = '
        <div class="header" width="100%" height="106" style="vertical-align: bottom; "><img width="100%" height="106" src="assets/img/header.jpg"/></div>
';

$footer = '<div class="footer" align="center">See <a href="http://mpdf1.com/manual/index.php">documentation manual</a></div>';
//create html of the data
ob_start();
?>
<div class="body">




    <h1 class="heading-text">Order Confirmation Document</h1>



    <h1>Thank you for joining our shared mailing service</h1>

    <p>Please check to see that all the details on this order form are correct. If not, please notify your account manager. If they are, please click the “I Agree” button on this page and this will sign the order form electronically.</p>

    <div class="customer-details margin-top">
        <table style="width:100%">
            <tr>
                <th width="30%"></th> 
                <th width="70%"></th>
            </tr>
            <tr>
                <td width="30%" >Your Name</td>
                <td width="70%" >
                    <?php echo $customer_name ?></td> 
            </tr>
            <tr>
                <td width="30%" >Position</td>
                <td width="70%" ></td> 
            </tr>
            <tr>
                <td width="30%" >Company Name</td>
                <td width="70%" ><?php echo $company_name ?></td> 
            </tr>
            <tr>
                <td width="30%" >Address</td>
                <td width="70%" ><?php echo $address1 ?>
                    <?php echo $address2 ?>
                    <?php echo $address3 ?>
                    <?php echo $address4 ?>
                    <?php echo $county ?>
                </td> 
            </tr>
            <tr>
                <td width="30%" >Postcode</td>
                <td width="70%" >
                    <?php echo $postcode ?></td> 
            </tr>
            <tr>
                <td width="30%" >Email Address</td>
                <td width="70%" ><?php echo $email ?></td> 
            </tr>
            <tr>
                <td width="30%" >Line of Business</td>
                <td width="70%" >
                    <?php echo $lob ?></td> 
            </tr>
        </table>

    </div>
    <div style="clear: both;"></div>
    <div class="mailer-details margin-top">


        <p class="bold-text">SHARED MAILINGS TARGET AND DATE</p>

        <table style="width:100%">
            <tr>
                <th width="45%" class="bold-text text-left">Name	</th> 
                <th width="15%" class="bold-text text-left">Send Date	</th> 
                <th width="15%" class="bold-text text-left">Copy Date	</th>
                <th width="25%" class="bold-text text-left">Package</th>
            </tr>
            <tr>
                <td width="50%" ><?php echo $mailing_id ?> <?php echo $mailing_name ?> - <?php echo $distribution ?></td>
                <td width="25%" ><?php echo $send_date ?></td> 
                <td width="25%" ><?php echo $date_design_required ?></td> 
                <td width="25%" ><?php echo $design_option ?></td>
            </tr>
        </table>

        <div class="customer-details margin-top">
            <table style="width:100%">
                <tr>
                    <th width="30%"></th> 
                    <th width="70%"></th>
                </tr>
                <tr>
                    <td width="30%" >Method of Payment</td>
                    <td width="70%" >30 DAY INVOICE</td> 
                </tr>
                <tr>
                    <td width="30%" >Price of service</td>
                    <td width="70%" >£<?php echo $order_value ?> plus VAT</td> 
                </tr>
            </table>

        </div>
        <div style="clear: both;"></div>
    </div>
    <div class="disclaimer">
        <h3 class="tick-box-text">Please click the box &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; to join the service and its terms & conditions. Please ensure that you have the relevant authority within your organisation to commit your company to this service. <br>Thanks for your business.</h3>
    </div>

    <h1 class="heading-text">Terms & Conditions - At A Glance</h1>

    <h1>What you need to know about your shared mailing service &ndash; plain English version</h1>

    <p>A shared mailing is where your leaflet is enclosed into an envelope with up to 9 other compa-nies and sent to a particular target audience. </p>

    <div class="tc-sub-header"><h3>Production and supply of the leaflets </h3>
    </div>

    <div class="gray-heading gray-margin-top"><h3>DESIGN &amp; PRINT SERVICE (WHERE WE DESIGN &amp; PRINT FOR YOU) </h3>
    </div>

    <p>If you&rsquo;ve agreed for us to do your design and print, we&rsquo;ll need you to send across as much information and imagery as you can. Our designers will also talk with you about what you want to achieve from your campaign. We&rsquo;ll provide you with the design deadline dates for each individual mailing you&rsquo;ve joined. We&rsquo;ll need you to work with us to meet these deadlines so that we meet our deadlines with the printers. <span class="bold-text underline-text">You agree that, if we are unable to get final sign-off by the deadline date, that what Meridian Delta considers to be the best and most likely successful drafts (whether seen by you or not) can be forwarded to the printers and that this completes our responsibility for the design part of this order to your satisfaction.</span></p>

    <div class="gray-heading gray-margin-top"><h3>DESIGN ONLY SERVICE (WHERE WE DESIGN &amp; YOU PROVIDE PRINTED MATERIALS) </h3>
    </div>

    <p>When we&rsquo;re doing the design but you&rsquo;re using our design with your own printers, you&rsquo;ll need to let us know your printer&rsquo;s deadline for printing and delivering leaflets to us within the neces-sary timescale. We&rsquo;ll need you to send across as much information and imagery as you can. Our designers will also talk with you about what you want to achieve from your campaign. We&rsquo;ll need you to work with us to meet your printer&rsquo;s deadline. Your leaflet will need to ar-rive as a folded A4 to A5 sheet on paper no heavier than 135gsm.</p>

    <div class="gray-heading gray-margin-top"><h3>POST ONLY SERVICE (WHERE YOU PROVIDE US WITH THE LEAFLETS) </h3>
    </div>

    <p>We&rsquo;ll provide you with the dates by which your leaflets will need delivery to us for inclusion in your shared mailing. Your leaflet will need to arrive as a folded A4 to A5 sheet on paper no heavier than 135gsm.</p>

    <div class="tc-sub-header"><h3>Cancellations and refunds</h3>
    </div>
    <div class="gray-heading gray-margin-top"><h3>FAILURE TO MEET AGREED DEADLINES FOR DESIGN, PRINT &amp;/OR DELIVERY TO US</h3>
    </div>
    <p>Shared mailings are a low-margin advertising service with limited space availability. Before you agree to this booking, we need you to know that you are responsible for making sure that your leaflets arrive with us on time for inclusion. What we need you to do for each of the ser-vice levels is listed above. If, for any reason that is not Meridian Delta&rsquo;s responsibility, we do not receive what we need to include you in your shared mailing, this does not give rise to a refund.</p>

    <div class="gray-heading gray-margin-top"><h3>FAILURE TO PROVIDE PRINTING ON CORRECT PAPER </h3>
    </div>
    <p>Shared mailings require us to produce envelopes under a given weight. The maximum weight of your paper is 135gsm. If you provide us with heavier paper, we will not include it in the shared mailing and this will not give rise to a refund.</p>

    <div class="gray-heading gray-margin-top"><h3> LOW OR NO RESPONSES TO YOUR LEAFLETS </h3>
    </div>
    <p>No advertising is guaranteed to work in the sense that it produces enquiries or sales. Meridian Delta&rsquo;s responsibility for the service ends at the successful delivery into the target markets of your leaflet together with the leaflets of your advertisers. Failure to produce a response or make a sale does not give rise to a refund. Please satisfy yourself that, before joining the service, that you are prepared for all outcomes, positive and negative.</p>

    <div class="tc-sub-header"><h3>About the data I get with my shared mailing</h3>
    </div>

    <div class="gray-heading gray-margin-top"><h3>HOW CAN I FOLLOW UP MY SHARED MAILINGS WITH FURTHER MARKETING? </h3>
    </div>
    <p>On the day of dispatch, our admin team will send you a download containing the details of the organisations who will receive your information, including telephone numbers and contact ad-dresses. Please note that the information does not contain email addresses. You have a li-cence to use that data for 12 months after your shared mailing has been dispatched. Usage of the information after this time scale will result in additional charges at the standard rate of the relevant data as listed on www.meridiandelta.com at that time. Where a company has bought from you or enquired about your service as a result of the shared mailing or usage of the data, this data is no longer considered as licenced and you can use it for internal marketing pur-poses as you would any other data your company has title over.</p>

    <div class="tc-sub-header"><h3>Proof of service</h3>
    </div>

    <div class="gray-heading gray-margin-top"><h3>HOW DO I KNOW YOU&rsquo;LL DO WHAT YOU&rsquo;LL SAY YOU&rsquo;LL DO?</h3>
    </div>
    <p>Visibility and transparency are two of the most important parts of Meridian Delta&rsquo;s work with customers, whichever service they choose. Meridian Delta works with partners to print the leaflets, insert them into the envelopes and dispatch the shared mailings. All of the work we do with partners produces paper trails, for example a postal docket. We will include, with your paper/posted invoice, a copy of the postal docket containing your shared mailing. Should you require further proof, we will make other items available to you. You will, of course, also know who we have sent the shared mailings to as we will provide you with their contact details.</p>

    <div class="tc-sub-header"><h3>Finance and payment</h3>
    </div>

    <div class="gray-heading gray-margin-top"><h3>WHEN DOES THIS SERVICE BECOME PAYABLE? </h3>
    </div>
    <p>For our customers&rsquo; conveniences, we ask for payment 30 days after the day that the shared mailing has been dispatched. In order to assist us, we use invoice factoring facilities provided by GC Factoring Limited. It is to GC Factoring Limited that all invoices are payable. If we are unable to secure this facility for you, we will ask you for payment prior to dispatch. However, failure to secure the facility to you means you can cancel this agreement within 2 working days after we notify you.</p>

    <div class="gray-heading gray-margin-top"><h3>INVOICING </h3>
    </div>
    <p>Many customers will book multiple slots in multiple shared mailings with us. Each shared mail-ing gives rise to a new invoice. For example, if there are 6 shared mailing slots listed on the front page of this booking form, each slot will generate its own invoice and that invoice will become payable after 30 days.</p>

    <div class="gray-heading gray-margin-top"><h3>DIVISIBILITY OF AN INVOICE FROM ALL OTHER ACTIVITY </h3>
    </div>
    <p>Each shared mailing we perform for you will generate a separate invoice. It will be separate from all other shared mailings or any other services you purchase from us. An invoice (either in part or in whole) can only be considered on its own and not offset against any other invoice. </p>

    <h1 class="heading-text">Terms & Conditions</h1>
    <div class="terms-and-conditions">
        <p class="bold-text tcbold">1. Application of Conditions</p>

        <p>1.1 The Supplier shall supply and the Customer shall purchase the Goods and Services in accordance with the Order Confirmation Document which are subject to these Conditions. 1.2 The Contract shall be to the exclusion of any other terms and conditions subject to which any such quotation is accepted or purported to be accepted, or any such order is made or purported to be made, by the Customer.</p>

        <p class="bold-text tcbold">2. Definitions and Interpretation</p>

        <p>2.1 In these Conditions:- </p>

        <p>&quot;Business Day&quot; means any day other than a Saturday, Sunday or bank holiday;</p>

        <p>&quot;the Customer&quot; means the person who accepts a quotation or offer of the Supplier for the sale of the Goods and supply of the Services, or whose order for the Goods and Services is accepted by the Supplier;</p>

        <p>&ldquo;Commencement Date&rdquo; means the commencement date for this agreement as set out in the Order Confirmation Document</p>

        <p>&quot;the Contract&quot; means the contract for the purchase and sale of the Goods and supply of the Services under these conditions;</p>

        <p>&ldquo;these Conditions&rdquo; means the standard terms and conditions of sale set out in this document and (unless the context otherwise requires) in-cludes any special terms and conditions agreed in the Order Confirmation Document between the Customer and the Supplier;</p>

        <p>&ldquo;the Delivery Date&rdquo; means the date on which the Goods and Services are to be delivered as stipulated in the Order Confirmation Document and accepted by the Supplier;</p>

        <p>&ldquo;the Goods&rdquo; means the goods (including any instalment of the goods or any parts for them) which the Supplier is to supply as set out in the Order Confirmation Document.</p>

        <p>&ldquo;month&rdquo; means a calendar month;</p>

        <p>&ldquo;the Services&rdquo; means the services to be provided to the Customer as set out in the Order Confirmation Document</p>

        <p>&ldquo;the Supplier&rdquo; means Fairlie Communications Ltd, a company registered in England under 3855212</p>

        <p>&ldquo;writing&rdquo; includes any communications effected by telex, facsimile transmission, electronic mail or any comparable means.</p>

        <p>&ldquo;Order Confirmation Document&rdquo; means the confirmation of the goods and services to be supplied y the Supplier to the Customer.</p>

        <p>&ldquo;Input Items&rdquo; means material supplied by the customer to the supplier in relation to the fulfilment of the contract, including, but not limited to, printed leaflets, collateral necessary for the design of printed leaflets, documents, maps, plans, film and computer discs.</p>

        <p>&ldquo;Contract Data&rdquo; means data made available to the customer by the supplier (specifically the details of the organisations and/or businesses received the shared mailing from us</p>

        <p>2.2 Any reference in these Conditions to a statute or a provision of a statute shall be construed as a reference to that statute or provision as amended, re-enacted or extended at the relevant time. 2.3 The headings in these Conditions are for convenience only and shall not affect their interpretation.</p>

        <p class="bold-text tcbold">3. Basis of Sale and Service</p>

        <p>3.1 The Supplier's employees or agents are not authorised to make any representations concerning the Goods and Services unless confirmed by the Supplier in writing. In entering into the Contract the Customer acknowledges that it does not rely on, and waives any claim for breach of, any such representations which are not so confirmed. 3.2 No variation to these Conditions shall be binding unless agreed in writing between the authorised representatives of the Customer and the Supplier. 3.2.1 Sales literature, price lists and other documents issued by the Supplier in relation to the Goods and Services are subject to alteration without notice and do not constitute offers to sell the Goods which are capable of acceptance. An order placed by the Customer may not be withdrawn cancelled or altered prior to acceptance by the Supplier and no contract for the sale of the Goods and Services shall be binding on the Supplier unless the Supplier has issued a signed Order Confirmation Document. 3.3 Any typographical, clerical or other accidental errors or omissions in any sales literature, quotation, price list, acceptance of offer, invoice or other document or information issued by the Supplier shall be subject to correction without any liability on the part of the Supplier. 3.4 The customer will supply all necessary Input Items to the supplier in sufficient time for the supplier to provide the goods and services in accordance with the contract. 3.5 In respect of the input items, the customer is solely responsible for a) their accuracy, b) that they comply with all relevant codes of conduct and legislation regarding their use in this contract, and c) that they do not infringe any copyright owned by a third party, and d) that they are not otherwise illegal or unlawful. The customer agrees to fully indemnify the supplier against any loss, claims, damages, costs and expenses how-soever arising from the suppliers use of the input items.  3.6 The customer will use any contract data only in accordance with the terms and conditions of this contact. 3.7 Unless otherwise specified in the Order Confirmation Document, the customer is to a) keep all contract data secure, and ensure it is not in full or in part disclosed to third parties, b) not give, sell, rent, or use in the provision of goods or services, in full or in part, contract data to third parties. 3.8 The customer agrees to indemnify the supplier against any loss, claims, damages, costs and expenses howsoever arising from unauthor-ised uses of contract data.</p>

        <p class="bold-text tcbold">4. The Goods</p>

        <p>4.1 No order submitted by the Customer shall be deemed to be accepted by the Supplier unless and until receipt of a Order Confirmation Document signed by the Supplier's authorised representative. 4.2 The specification for the Goods shall be those set out in the Supplier's sales documentation unless varied expressly in the Customer's order (if accepted by the Supplier). The Goods will only be supplied in the minimum units (or multiples) stated in the Supplier's price list or in multiples of the sales outer as specified. Orders received for quantities other than these will be adjusted accordingly, illustrations, photographs or descrip-tions whether in catalogues, brochures, price lists or other documents issued by the Supplier are intended as a guide only and shall not be binding on the Supplier. 4.3 The Supplier reserves the right to make any changes in the specification of the Goods which are required to conform with any applicable safety or other statutory or regulatory requirements or, where the Goods are to be supplied to the Supplier's specification, which do not materi-ally affect their quality or performance. 4.4 No order which has been accepted by the Supplier may be cancelled by the Customer except with the agreement in writing of the Supplier on the terms that the Customer shall indemnify the Supplier in full against all loss (including loss of profit), costs (including the cost of all labour and materials used), damages, charges and expenses incurred by the Supplier as a result of cancellation.</p>

        <p class="bold-text tcbold">5. The Services</p>

        <p>5.1 With effect from the Commencement Date the Supplier shall, in consideration of the Fees being paid in accordance with the Terms of Pay-ment will provide the services expressly identified in the Order Confirmation Document agreed under this agreement. 5.2 The Supplier will use reasonable care and skill to perform the services identified in the Order Confirmation Document or otherwise agreed under this agreement.</p>

        <p class="bold-text tcbold">6. Price</p>

        <p>6.1 The price of the Goods and Services shall be the price listed in the Order Confirmation Document. 6.2 The Supplier reserves the right, by giving notice to the Customer at any time before delivery, to increase the price of the Goods and Ser-vices to reflect any increase in the cost to the Supplier which is due to any factor beyond the control of the Supplier (such as, without limitation, any foreign exchange fluctuation currency regulation, alteration of duties, significant increase in the costs of labour, materials or other costs of manufacture), any change in delivery dates, quantities or specifications for the Goods and services which are requested by the Customer, or any delay caused by any instructions of the Customer or failure of the Customer to give the Supplier adequate information or instructions. 6.3 Except as otherwise stated under the terms of any Order Confirmation Document or in any price list of the Supplier, and unless otherwise agreed in writing between the Customer and the Supplier, all prices are inclusive of the Supplier's charges for packaging and transport as speci-fied in the Order Confirmation Document</p>

        <p class="bold-text tcbold">7. Payment</p>

        <p>7.1 All payments required to be made pursuant to this Agreement by either party shall be made within 30 days of the date of the relevant in-voice, without any set-off, withholding or deduction except such amount (if any) of tax as that party is required to deduct or withhold by law. 7.2 The time of payment shall be of the essence of these terms and conditions. If the Customer fails to make any payment on the due date in respect of the price or any other sum due under these terms and conditions then the Supplier shall, without prejudice to any right which the Supplier may have pursuant to any statutory provision in force from time to time, have the right to charge the Customer interest on a daily basis at an monthly of 3% on any sum due and not paid on the due date. Such interest shall be calculated cumulatively on a daily basis and shall run from day to day and accrue after as well as before any judgement. 7.3 All payments shall be made to the Supplier (or its authorised agent) as indicated on the invoice issued by the Supplier.</p>

        <p class="bold-text tcbold">8. Delivery</p>

        <p>8.1 The Delivery Date is approximate only. The Goods may be delivered by the Supplier in advance of the Delivery Date upon giving reasonable notice to the Customer. 8.2 With effect from the Commencement Date the Supplier shall, in consideration of the amount(s) being paid in accordance with the Order Confirmation Document will provide the services expressly identified in the schedule or otherwise agreed under this agreement.</p>

        <p class="bold-text tcbold">9. Risk and Retention of Title</p>

        <p>9.1 Risk of damage to or loss of the Goods shall pass to the Customer at: 9.1.1 in the case of Goods to be delivered at the Supplier's premises, the time when the Supplier notifies the Customer that the Goods are available for collection; 9.1.2 in the case of Goods to be delivered otherwise than at the Supplier's premises, the time of delivery or, if the Customer wrongfully fails to take delivery of the Goods, the time when the Supplier has tendered delivery of the Goods; or 9.1.3 in the case of goods being installed by the Supplier, the time that the Supplier notifies the Customer that the installation is complete. 9.2 Notwithstanding delivery and the passing of risk in the Goods, or any other provision of these Conditions, legal and beneficial title of the Goods shall not pass to the Customer until the Supplier has received in cash or cleared funds payment in full of the price of the Goods. 9.3 Sub-clause 9.2 notwithstanding, legal and beneficial title of the Goods shall not pass to the Customer until the Supplier has received in cash or cleared funds payment in full of the price of the Goods and any other goods supplied by the Supplier and the Customer has repaid all moneys owed to the Supplier, regardless of how such indebtedness arose. 9.4 Until payment has been made to the Supplier in accordance with these Conditions and title in the Goods has passed to the Customer, the Customer shall be in possession of the Goods as bailee for the Supplier and the Customer shall store the Goods separately and in an appropri-ate environment, shall ensure that they are identifiable as being supplied by the Supplier and shall insure the Goods against all reasonable risks. 9.5 The Customer shall not be entitled to pledge or in any way charge by way of security for any indebtedness any of the goods which remain the property of the Supplier, but if the Customer does so all money owing by the Customer to the Supplier shall (without prejudice to any other right or remedy of the Supplier) forthwith become due and payable. 9.6 The Supplier reserves the right to repossess any Goods in which the Supplier retains title without notice. The Customer irrevocably author-ises the Supplier to enter the Customer&rsquo;s premises during normal business hours for the purpose of repossessing the Goods in which the Sup-plier retains title and inspecting the Goods to ensure compliance with the storage and identification requirements of sub-clause 9.4. 9.7 The Customer&rsquo;s right to possession of the Goods in which the Supplier maintains legal and beneficial title shall terminate if; 9.7.1 The Customer commits or permits any material breach of his obligations under these Conditions; 9.7.2 The Customer enters into a voluntary arrangement under Part 1 of the Insolvency Act 1986, or any other scheme or arrangement is made with his creditors; 9.7.3 The Customer is or becomes the subject of a bankruptcy order or takes advantage of any other statutory provision for the relief of insol-vent debtors;</p>

        <p></p>

        <p>9.7.4 The Customer convenes any meeting of its creditors, enters into voluntary or compulsory liquidation, has a receiver, manager, administra-tor or administrative receiver appointed in respect of its assets or undertaking or any part thereof, any documents are filed with the court for the appointment of an administrator in respect of the Customer, notice of intention to appoint an administrator is given by the Customer or any of its directors or by a qualifying floating charge-holder (as defined in paragraph 14 of Schedule B1 of the Insolvency Act 1986), a resolution is passed or petition presented to any court for the winding up of the Customer or for the granting of an administration order in respect of the Customer, or any proceedings are commenced relating to the insolvency or possible insolvency of the Customer.</p>

        <p class="bold-text tcbold">10. Assignment</p>

        <p>10.1 The Supplier may assign the Contract or any part of it to any person, firm or company. 10.2 The Customer shall not be entitled to assign the Contract or any part of it without the prior written consent of the Supplier.</p>

        <p class="bold-text tcbold">11. Defective Goods</p>

        <p>11.1 No Goods may be returned to the Supplier without the prior agreement in writing of the Supplier. Subject thereto any Goods returned which the Supplier is satisfied were supplied subject to defects of quality or condition which would not be apparent on inspection shall either be replaced free of charge or, at the Supplier's sole discretion the Supplier shall refund or credit to the Customer the price of such defective Goods but the Supplier shall have no further liability to the Customer. 11.2 The Supplier shall be under no liability in respect of any defect arising from fair wear and tear, or any wilful damage, negligence, subjection to normal conditions, failure to follow the Supplier's instructions (whether oral or in writing), misuse or alteration of the Goods without the Sup-plier's approval, or any other act or omission on the part of the Customer, its employees or agents or any third party. 11.3 Contract data is provided solely for the purpose of the customer, at their discretion, &lsquo;following up&rsquo; (telephoning, faxing, email, or other) contacts that received mail items as a consequence of this contract. The supplier warrants that at least 98% of Contract Data relating to a mail-ing address are accurate. Any records within the contract data that fall below this threshold will be replaced free of charge by the supplier, or the supplier will credit the customer per defective item, at a rate not to exceed the suppliers advertised rate for supplying an individual data record, the supplier will then have no further liability in respect of defective contract data. Other data provided in the contract data (including, but not exclusively, telephone, fax, email field) is provided for informational purposes only, and no guarantee is provided by the supplier in respect of this data. 11.4 Subject as expressly provided in these Conditions, and except where the Goods are sold under a consumer sale, all warranties, conditions or other terms implied by statute or common law are excluded to the fullest extent permitted by law.</p>

        <p class="bold-text tcbold">12. Customer's Default</p>

        <p>12.1 If the Customer fails to make any payment on the due date then, without prejudice to any other right or remedy available to the Supplier, the Supplier shall be entitled to:- 12.1.1 cancel the contract or suspend any further deliveries of Goods and Services to the Customer; 12.1.2 appropriate any payment made by the Customer to such of the Goods and Services (or the goods supplied under any other contract between the Customer and the Supplier) as the Supplier may think fit (notwithstanding any purported appropriation by the Customer); and 12.2 This condition applies if:- 12.2.1 the Customer fails to perform or observe any of its obligations hereunder or is otherwise in breach of the Contract; or 12.2.2 the Customer becomes subject to an administration order or makes any voluntary arrangement with its creditors (within the meaning of the Insolvency Act 1986) or (being an individual or firm) becomes bankrupt or (being a company) goes into liquidation; or 12.2.3 an encumbrancer takes possession, or a receiver is appointed, of any of the property or assets of the Customer; or 12.2.4 the Customer ceases, or threatens to cease, to carry on business; or 12.2.5 the Supplier reasonably apprehends that any of the events mentioned above is about to occur in relation to the Customer and notifies the Customer accordingly. 12.3 If Condition 12.2 applies then, without prejudice to any other right or remedy available to the Supplier, the Supplier shall be entitled to cancel the Contract or suspend any further deliveries under the Contract without any liability to the Customer, and if the Goods have been deliv-ered but not paid for the price shall become immediately due and payable notwithstanding any previous agreement or arrangement to the con-trary.</p>

        <p class="bold-text tcbold">13. Liability</p>

        <p>13.1 Except in respect of death or personal injury caused by the Company&rsquo;s negligence, the Company will not by reason of any representation, implied warranty, condition or other term, or any duty at common law or under express terms of this contract, be liable for any loss of profit or any indirect, special or consequential loss, damage, costs, expenses or other claims (whether caused by the Company&rsquo;s servants or agents or otherwise) which arise out of or in connection with the supply of the Goods and Services. 13.2 The Customer shall indemnify the Supplier against all damages, costs, claims and expenses suffered by arising from loss or damage to any equipment (including that of third parties) caused by the Customer, or its agent or employees. 13.3 Where the Customer consists of two or more persons such expression throughout shall mean and include such two or more persons and each or any of them. All obligations on the part of such a Customer shall be joint and several obligations of such persons. 13.4 The Supplier shall not be liable to the Customer or be deemed to be in breach of these terms and conditions by reason of any delay in performing, or any failure to perform, any of the Supplier's obligations if the delay or failure was due to any cause beyond the Supplier's reason-able control. 13.5 The supplier may cancel the contract prior to completion of the contract, after given the customer 3 days written notice. The customer will be entitled to a full refund of any monies paid. The supplier will not be liable for any loss of profit or any indirect, special or consequential loss, damage, costs, expenses or other claims (whether caused by the Company&rsquo;s servants or agents or otherwise) which arise out of or in connec-tion with this occurrence.</p>

        <p class="bold-text tcbold">14. Communications</p>

        <p>14.1 All communications between the parties about the Contract shall be in writing and delivered by hand or sent by pre-paid first class post or sent by fax or sent by electronic mail: 14.1.1 (in the case of communications to the Supplier) to its registered office or such changed address as shall be notified to the Customer by the Supplier; or 14.1.2 (in the case of the communications to the Customer) to the registered office of the addressee (if it is a company) or (in any other case) to any address of the Customer set out in any document which forms part of the Contract or such other address as shall be notified to the Supplier by the Customer. 14.2 Communications shall be deemed to have been received: 14.2.1 if sent by pre-paid first class post, two Business Days after posting (exclusive of the day of posting); or 14.2.2 if delivered by hand, on the day of delivery; or 14.2.3 if sent by fax or electronic mail on a Business Day prior to 4.00 pm, at the time of transmission and otherwise on the next Business Day.</p>

        <p></p>

        <p class="bold-text tcbold"> 15. Force Majeure</p>

        <p>15.1 In the event that either party is prevented from fulfilling its obligations under this Agreement by reason of any supervening event beyond its control including but not limited to war, national emergency, flood, earthquake, strike or lockout (subject to Sub-clause 15.2) the party shall not be deemed to be in breach of its obligations under this Agreement. The party shall immediately give notice of this to the other party and must take all reasonable steps to resume performance of its obligations. 15.2 Sub-clause 15.1 shall not apply with respect to strikes and lockouts where such action has been induced by the party so incapacitated. 15.3 Each party shall be liable to pay to the other damages for any breach of this Agreement and all expenses and costs incurred by that party in enforcing its rights under this Agreement. 15.4 If and when the period of such incapacity exceeds 6 months then this Agreement shall automatically terminate unless the parties first agree otherwise in writing.</p>

        <p class="bold-text tcbold">16. Divisibility</p>

        <p>This contract is divisible. The work performed in each period during the currency of the contract shall be invoiced separately. Each invoice for work performed in any period shall be payable by the customer in full in accordance with the terms of payment provided for herein, without reference to and not withstanding any defect or default in the work performed or to be performed in any period.</p>

        <p class="bold-text tcbold">17. Waiver</p>

        <p>No waiver by the Supplier of any breach of the Contract by the Customer shall be considered as a waiver of any subsequent breach of the same or any other provision.</p>

        <p class="bold-text tcbold">18. Severance</p>

        <p>If any provision of these Conditions is held by any competent authority to be invalid or unenforceable in whole or in part the validity of the other provisions of these Conditions and the remainder of the provision in question shall not be affected thereby.</p>

        <p class="bold-text tcbold">19. Third Party Rights</p>

        <p>A person who is not a party to the Contract shall have no rights under the Contract pursuant to the Contracts (Rights of Third Parties) Act 1999.</p>

        <p class="bold-text tcbold">20. Governing Law and Jurisdiction</p>

        <p>These terms and conditions shall be governed by the laws of England and Wales and the parties agree to submit to the exclusive jurisdiction of the English and Welsh courts.</p>

    </div>
    <div class="final-footer">
        <img class="logo" src="assets/img/logo.jpg" />

        <p>Fairlie Communications Limited trading as Meridian Delta</p> 
        <p>1st Floor, 1 Pink Lane, Newcastle upon Tyne, NE1 5DW</p>

        <p class="footer-p-margin">Telephone 0800 652 6627</p>
        <p>Email <a href="mailto:enquiries@meridiandelta.com" >enquiries@meridiandelta.com</a></p>

        <p class="footer-p-margin">Company Registered in England 03855212 </p>
        <p>VAT Registration 847 4982 73 </p>
        <p>Members of the Direct Marketing Association since 2006 </p>
        <p>ISO 9001:2008 accredited since 2011</p>
    </div>

</div>
<?php 
    $body = ob_get_clean();

$body = iconv("UTF-8","UTF-8//IGNORE",$body);

include("mpdf/mpdf.php");
$mpdf=new \mPDF('c','A4','','' , 0, 0, 30, 0, 0, 0); 

$mpdf->SetHTMLHeader($header);
//$mpdf->SetHTMLFooter($footer);
$stylesheet = file_get_contents('assets/styles/sharedMailingContract.css');
$mpdf->WriteHTML($stylesheet,1);	// The parameter 1 tells that this is css/style only and no

//write html to PDF
$mpdf->WriteHTML($body);

//output pdf
//$mpdf->Output('signable.pdf','D');

//save to server
//$mpdf->Output("signable.pdf",'F');


$content = $mpdf->Output('', 'S');

$content = chunk_split(base64_encode($content));
$mailto = 'lewis.dimmick@meridiandelta.com, alex@mdelta.co.uk';
$from_name = 'Shared Mailing Contract';
$from_mail = 'sharedMailing@meridiandelta.com';
$replyto = 'lewis.dimmick@meridiandelta.com';
$uid = md5(uniqid(time())); 
$subject = 'Shared Mailing Contract';
$message = 'Shared Mailing Contract';
$filename = 'signable.pdf';

$header = "From: ".$from_name." <".$from_mail.">\r\n";
$header .= "Reply-To: ".$replyto."\r\n";
$header .= "MIME-Version: 1.0\r\n";
$header .= "Content-Type: multipart/mixed; boundary=\"".$uid."\"\r\n\r\n";
$header .= "This is a multi-part message in MIME format.\r\n";
$header .= "--".$uid."\r\n";
$header .= "Content-type:text/plain; charset=iso-8859-1\r\n";
$header .= "Content-Transfer-Encoding: 7bit\r\n\r\n";
$header .= $message."\r\n\r\n";
$header .= "--".$uid."\r\n";
$header .= "Content-Type: application/pdf; name=\"".$filename."\"\r\n";
$header .= "Content-Transfer-Encoding: base64\r\n";
$header .= "Content-Disposition: attachment; filename=\"".$filename."\"\r\n\r\n";
$header .= $content."\r\n\r\n";
$header .= "--".$uid."--";
$is_sent = @mail($mailto, $subject, "", $header);

$mpdf->Output();


?> 