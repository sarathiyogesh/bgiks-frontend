@extends('frontend.master')
@section('maincontent')
	<main id="main">
        <section class="small-section bg-white pt-30 pb-30">
        </section>
        <section class="page-section bg-white pb-60">
            <div class="container relative">
                <div class="row d-flex justify-content-center">
                    <div class="col-md-8">
                        <h1 class="page-title text-center mb-40">Payment</h1>
                        <form class="form">
                            <div class="row">
                                <?php
                                    include('cc_crypto.php');
                                     $parameters = [
                                        'currency'=>'INR',
                                        'tid' => time(),
                                        'order_id' => time(),
                                        'amount' => 1000, //$info->totalPrice,
                                        'billing_email'=> 'test@gmail.com',
                                        'billing_name'=> 'test',
                                        'billing_address'=>'chennai',
                                        'billing_tel'=> '9600250306',
                                        'merchant_param1'=>'Course',
                                        'merchant_id'=> '3100104',
                                        'merchant_param2'=>time(),
                                        'redirect_url'=>'https://www.bgiks.in/pg_response',
                                        'cancel_url'=>'https://www.bgiks.in/pg_response',
                                        'integration_type'=>'iframe_normal',
                                        'billing_city'=>'Chennai',
                                        'billing_state'=>'TN',
                                        'billing_zip' => '636454',
                                        'billing_country'=>'IND'
                                    ];
                                    $working_key = '6B775AE5D6802E497236FB990BCA173D';//Shared by CCAVENUES
                                    $access_code = 'AVFA40KL59BD94AFDB';//Shared by CCAVENUES
                                    $merchant_data = '';
                                    $i = 1;
                                    foreach ($parameters as $key => $value){
                                        if($i == 1){
                                            $merchant_data .= $key.'='.$value;
                                        }else{
                                            $merchant_data .= '&'.$key.'='.$value;
                                        }
                                        $i++;
                                    }
                                    try{
                                        $encrypted_data = encrypt($merchant_data, $working_key); // Method for encrypting the data.
                                    }catch(Exception $e){
                                        echo $e->getMessage().'__'.$e->getLine();
                                    }
                                    $production_url='https://secure.ccavenue.com/transaction/transaction.do?command=initiateTransaction&encRequest='.$encrypted_data.'&access_code='.$access_code;
                                ?>
                                <iframe src="<?php echo $production_url; ?>" id="paymentFrame" width="482" height="500" frameborder="0" scrolling="Yes" ></iframe>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection