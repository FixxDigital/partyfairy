   <footer class="pf-footer">
      <div class="container">
        <div class="row no-gutters">
          <div class="col-lg-9">
            <div class="pf-footer--left">
              <div class="row m-b-25">



<?php $footer_menu = get_field('social_media', 'option'); 
if ($footer_menu){
foreach ($footer_menu as $key => $value) {
 
?>
                <div class="col-lg-3">
                  <div class="footer--title">
                    <img src="<?php echo  $value['menu_icon'] ?>">
                   <?php echo  $value['menu_title'] ?>
                  </div>
                  <ul class="footer--list">
                    <li><a href="#">Themes & Occasions</a></li>
                    <li><a href="#">Themes & Occasions</a></li>
                    <li><a href="#">Themes & Occasions</a></li>
                    <li><a href="#">Themes & Occasions</a></li>
                  </ul>
                </div>

  <?php }  } ?>   
              </div>
              <div class="row">
                <div class="col-lg-4 m-b-10">
                  <div class="footer-btm-title">
                    <h6 class="font-12">ABOUT PARTY FAIRY</h6>
                    <p>From small gatherings to huge events, important occasions to impromptu celebrations … we bring together the best party people so you can find everything you need to make them happen.</p>
                    <p>No fuss, no muss, no hassle, no problems. It’s the only way to throw a party, really.</p>
                    <p>Need help with anything? Get in touch with us via WhatsApp at (65) 9896 4800. </p>
                  </div>
                </div>
                <div class="col-lg-4 m-b-10"> 
                  <div class="footer-btm-title">
                    <h6 class="font-12">PAYMENT PARTNERS</h6><img src="https://www.partyfairy.com/static/version1548774359/frontend/Partyfairy/default/en_US/images/icons8-Visa.svg"><img src="https://www.partyfairy.com/static/version1548774359/frontend/Partyfairy/default/en_US/images/icons8-Visa.svg"><img src="https://www.partyfairy.com/static/version1548774359/frontend/Partyfairy/default/en_US/images/icons8-Visa.svg">
                  </div>
                </div>
                <div class="col-lg-4 m-b-10">
                  <div class="footer-btm-title">
                    <h6 class="font-12">SECURITY CERTIFICATION</h6><img src="<?php echo get_template_directory_uri()  ?>/assets/imgs/secure-cert.png">
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3">
            <div class="pf-footer--right">
              <div class="newsletter-wrap">
                <div class="newsletter-wrap--head">
                  <div class="newsletter-wrap--head--img"><xml version="1.0" encoding="UTF-8" standalone="no">
<svg width="173px" height="140px" viewBox="0 0 173 140" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
    <!-- Generator: Sketch 42 (36781) - http://www.bohemiancoding.com/sketch -->
    <title>part fairy logo_</title>
    <desc>Created with Sketch.</desc>
    <defs>
        <rect id="path-1" x="0" y="0" width="296.126168" height="306.127022"></rect>
        <rect id="path-3" x="0" y="0" width="296.126168" height="306.127022"></rect>
        <rect id="path-5" x="0" y="0" width="296.126168" height="306.127022"></rect>
        <rect id="path-7" x="0" y="0" width="296.126168" height="306.127022"></rect>
        <rect id="path-9" x="0" y="0" width="296.126168" height="306.127022"></rect>
        <rect id="path-11" x="0" y="0" width="296.126168" height="306.127022"></rect>
        <rect id="path-13" x="0" y="0" width="296.126168" height="306.127022"></rect>
        <rect id="path-15" x="0" y="0" width="296.126168" height="306.127022"></rect>
        <rect id="path-17" x="0" y="0" width="296.126168" height="306.127022"></rect>
        <rect id="path-19" x="0" y="0" width="296.126168" height="306.127022"></rect>
    </defs>
    <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <g id="part-fairy-logo_" transform="translate(-28.000000, -48.000000)">
            <g id="Layer_1">
                <g id="Group">
                    <g id="Clipped">
                        <mask id="mask-2" fill="white">
                            <use xlink:href="#path-1"></use>
                        </mask>
                        <g id="SVGID_1_"></g>
                        <path d="M104.562884,106.546151 L99.8761214,105.246117 L99.8126012,107.34538 C100.018613,108.936978 99.9842775,110.142682 98.2039942,110.10495 C94.3859133,110.024341 90.5695491,109.669318 86.7549017,109.70705 C84.1660231,109.732777 82.2003295,108.796341 80.2432197,107.221894 C77.0260058,104.633832 73.6937688,102.169257 70.2653931,99.8658994 C68.6018497,98.7476648 67.5082717,97.4253352 66.8885202,95.5713296 C66.6413064,94.8286983 66.1623295,94.1598156 65.7485896,93.4806425 C65.5236936,93.1084693 65.1048035,92.8237654 64.9743295,92.4327263 C64.7683179,91.8187263 64.8163873,91.117257 64.608659,90.503257 C62.8283757,85.2465251 61.0309249,79.9966536 59.2060058,74.7570726 C57.415422,69.6083911 55.5887861,64.4717151 53.7758844,59.3316089 C53.4359653,59.7843911 53.4359653,60.1428436 53.5424046,60.4687095 C55.3175376,65.9604078 57.2506127,71.407514 58.8506358,76.9489497 C60.4111734,82.3531788 63.398341,87.350933 63.0687225,93.3417207 C62.9828844,94.8698603 64.6052254,96.7718883 65.8945145,98.0444804 C70.3254798,102.421374 75.0706127,106.482693 79.465526,110.893888 C81.8861618,113.324162 84.6003642,113.929587 87.8278786,113.855838 C90.7583931,113.787235 93.6974913,114.111385 96.9147052,114.277749 C96.2297168,115.606939 95.5344277,116.615408 95.1927919,117.731927 C94.9060925,118.664933 94.6434277,119.940955 95.0554509,120.687017 C96.3704913,123.064123 95.0846358,125.317743 95.271763,127.698279 C95.8022428,134.417978 86.5952428,134.448849 83.2063526,131.678989 C79.4020058,128.569542 75.1907861,125.820263 70.8113237,123.590654 C66.9142717,121.606302 64.5159538,123.607804 65.4361387,127.919525 C66.2739191,131.841922 67.9134277,135.58938 69.0379075,139.460324 C69.3040058,140.374464 69.2782543,141.705369 68.7872601,142.449715 C66.6344393,145.701514 64.5846243,149.117961 61.906474,151.904972 C54.6703179,159.432475 47.1268613,166.664983 39.7173121,174.026123 C36.857185,176.864587 34.0279595,179.739067 31.185,182.596397 L31.684578,183.292721 C35.0511503,181.466156 38.4228728,179.643022 41.7774277,177.794162 C42.0177746,177.663816 42.1207803,177.305363 42.3302254,177.094408 C44.0658728,175.353598 45.6744798,173.456715 47.5818035,171.930291 C50.982711,169.210168 54.6634509,166.838207 58.052341,164.104363 C63.4584277,159.739475 69.1512139,155.621559 72.7255145,149.239732 C75.141,154.73486 77.6663584,160.065341 79.827763,165.541603 C81.1994566,169.016363 81.9771503,172.720944 83.1187977,176.290034 C84.1179538,179.420061 85.2063815,182.524363 86.3600462,185.599508 C86.6415954,186.350715 87.3368844,186.945849 88.1918324,188.076089 C88.4184451,186.908117 88.6587919,186.34557 88.6090058,185.807034 C88.2879711,182.267101 87.9154335,178.728883 87.5274451,175.194095 C87.4879595,174.837358 87.2132775,174.513207 87.0913873,174.159899 C86.0716301,171.19452 84.7703237,168.287453 84.1042197,165.246609 C82.4750116,157.789425 82.1350925,150.047536 79.002,142.929939 C78.4389017,141.648771 77.9479075,140.335017 77.4174277,139.026408 C82.7308092,144.902285 84.5025087,153.018061 92.236526,153.445117 C95.2786301,153.614911 97.3936821,152.429788 99.6134566,150.800458 C103.362867,148.047749 104.593786,144.418631 104.767179,139.89767 C105.040145,132.750916 105.833289,125.624743 106.399821,118.560313 L104.562884,106.546151 Z M107.999844,115.078693 C110.667694,110.916184 113.335543,106.751961 116.001676,102.589453 L107.999844,115.078693 Z" id="Shape" fill="#000000" fill-rule="nonzero" mask="url(#mask-2)"></path>
                    </g>
                    <g id="Clipped">
                        <mask id="mask-4" fill="white">
                            <use xlink:href="#path-3"></use>
                        </mask>
                        <g id="SVGID_1_"></g>
                        <path d="M43.5456936,67.6154637 C42.7456821,68.2929218 41.9868728,69.4283073 41.2417977,69.4197318 C40.5430751,69.4128715 39.8580867,68.1917318 39.167948,67.5039832 C39.8735376,66.8608268 40.5980116,65.6945698 41.2812832,65.7168659 C42.0212081,65.7408771 42.7250809,66.8745475 43.5456936,67.6154637" id="Shape" fill="#000000" fill-rule="nonzero" mask="url(#mask-4)"></path>
                    </g>
                    <g id="Clipped">
                        <mask id="mask-6" fill="white">
                            <use xlink:href="#path-5"></use>
                        </mask>
                        <g id="SVGID_1_"></g>
                        <path d="M42.5104855,48.7872737 C43.2195087,49.8523408 43.9182312,50.450905 43.8220925,50.8659553 C43.6796012,51.4782402 42.9722948,51.9601788 42.5053353,52.4987151 C41.9920231,52.0030559 41.1422254,51.5537039 41.0649711,50.9980168 C40.9928671,50.4886369 41.7602601,49.8677765 42.5104855,48.7872737" id="Shape" fill="#000000" fill-rule="nonzero" mask="url(#mask-6)"></path>
                    </g>
                    <g id="Clipped">
                        <mask id="mask-8" fill="white">
                            <use xlink:href="#path-7"></use>
                        </mask>
                        <g id="SVGID_1_"></g>
                        <path d="M59.6420636,52.435257 C58.7321792,53.0201006 58.0214393,53.8364804 57.3536185,53.8021788 C56.7218497,53.7695922 56.1381503,52.8434469 55.5338497,52.3083408 C56.1055318,51.6737598 56.5810751,50.7922067 57.2935318,50.512648 C57.6317341,50.3805866 58.4214451,51.3993464 59.6420636,52.435257" id="Shape" fill="#000000" fill-rule="nonzero" mask="url(#mask-8)"></path>
                    </g>
                    <g id="Clipped">
                        <mask id="mask-10" fill="white">
                            <use xlink:href="#path-9"></use>
                        </mask>
                        <g id="SVGID_1_"></g>
                        <path d="M72.8199364,52.0390726 C73.4688728,52.8365866 74.1727457,53.3253855 74.1933468,53.8416257 C74.213948,54.3064134 73.4860405,54.8037877 73.0894682,55.2874413 C72.663711,54.8723911 71.9375202,54.4864972 71.8894509,54.032 C71.8345145,53.5037542 72.3787283,52.9171955 72.8199364,52.0390726" id="Shape" fill="#000000" fill-rule="nonzero" mask="url(#mask-10)"></path>
                    </g>
                    <g id="Clipped">
                        <mask id="mask-12" fill="white">
                            <use xlink:href="#path-11"></use>
                        </mask>
                        <g id="SVGID_1_"></g>
                        <path d="M62.268711,60.5167318 C61.5356532,61.113581 60.9914393,61.8630726 60.6206185,61.7858939 C60.0918555,61.6761285 59.6918497,60.9575084 59.2369075,60.499581 C59.6660983,60.089676 60.0815549,59.3727709 60.5313468,59.3504749 C61.0034566,59.3281788 61.508185,59.9696201 62.268711,60.5167318" id="Shape" fill="#000000" fill-rule="nonzero" mask="url(#mask-12)"></path>
                    </g>
                    <g id="Clipped">
                        <mask id="mask-14" fill="white">
                            <use xlink:href="#path-13"></use>
                        </mask>
                        <g id="SVGID_1_"></g>
                        <path d="M29.6879827,59.8907263 C29.1592197,59.1549553 28.4433295,58.5289497 28.5600694,58.2373855 C28.7712312,57.7091397 29.432185,57.2426369 30.0073006,57.0436872 C30.2150289,56.9716536 31.0888613,57.8669274 31.0081734,58.1036089 C30.8055954,58.7107486 30.2390636,59.1944022 29.6879827,59.8907263" id="Shape" fill="#000000" fill-rule="nonzero" mask="url(#mask-14)"></path>
                    </g>
                    <g id="Clipped">
                        <mask id="mask-16" fill="white">
                            <use xlink:href="#path-15"></use>
                        </mask>
                        <g id="SVGID_1_"></g>
                        <path d="M158.587699,103.537894 C156.735312,103.200022 154.79537,103.045665 152.805642,103.021654 C153.118092,102.817559 153.397925,102.598028 153.700075,102.388788 C134.946156,102.375067 115.036855,109.434352 104.447861,121.325028 C115.417977,101.958302 148.400428,102.181263 153.756728,102.349341 C170.740665,90.6936313 176.133017,73.7743296 181.173434,61.8253408 C175.461763,66.7476313 149.736069,73.4501788 141.962566,77.6812905 C123.936555,84.7045587 107.987827,111.453006 103.740555,119.062832 C102.810069,119.589363 102.29504,119.896363 102.29504,119.896363 C102.29504,119.896363 102.490751,120.203363 102.844405,120.699022 C102.701913,120.966575 102.626376,121.108927 102.626376,121.108927 C102.626376,121.108927 102.794618,121.078056 103.076168,121.021458 C105.558607,124.403603 114.138988,134.558615 129.431913,137.256441 C164.316538,147.961994 186.105694,120.702453 200.298173,110.585173 C192.849139,111.784017 167.425595,104.007827 158.587699,103.537894" id="Shape" fill="#000000" fill-rule="nonzero" mask="url(#mask-16)"></path>
                    </g>
                    <g id="Clipped">
                        <mask id="mask-18" fill="white">
                            <use xlink:href="#path-17"></use>
                        </mask>
                        <g id="SVGID_1_"></g>
                        <path d="M113.771601,86.0937765 C114.262595,85.0990279 113.866023,84.6359553 112.794763,84.2020391 C114.154439,83.2090056 113.543272,79.8337207 112.020503,78.8612682 C109.374971,77.7790503 105.745734,80.4254246 104.803231,81.7511844 C103.958584,83.2930447 104.688208,83.339352 105.503671,83.2656034 C106.132006,83.9670726 102.69848,84.5021788 100.03578,84.8228994 C97.3730809,85.1453352 95.1618902,86.0045922 93.9155202,87.5515978 C92.6691503,89.0968883 94.7481503,89.7228939 94.7481503,89.7228939 C94.4923526,90.7193575 94.1180983,91.8324469 94.5730405,93.2079441 C94.7687514,94.3090279 95.3095318,94.9298883 94.743,95.9795196 C94.1867688,96.9639777 93.1944798,98.1799721 91.9532601,97.7529162 C92.2142081,98.2279944 93.7026416,99.4302682 93.2803179,99.7664246 C92.8545607,100.135168 92.5850289,100.361559 92.5850289,100.361559 L93.4022081,100.924106 C93.4022081,100.924106 92.8648613,101.575838 93.3129364,101.713045 C93.7592948,101.848536 94.4648844,101.62386 94.0271098,102.493408 C93.5618671,103.75914 93.584185,104.901385 94.9318439,104.642408 C96.5095491,104.18448 98.9713873,103.229179 99.6100231,104.06614 C99.9911445,104.626972 100.137069,106.489553 99.8349191,107.347095 C101.129358,108.285246 104.937139,109.360603 104.823832,107.938799 C104.18863,106.43467 104.131977,105.573698 105.404098,103.429844 C105.404098,103.429844 107.217,101.469503 107.877954,101.10419 C107.876237,101.10419 113.864306,98.7631006 113.771601,86.0937765" id="Shape" fill="#000000" fill-rule="nonzero" mask="url(#mask-18)"></path>
                    </g>
                    <g id="Clipped">
                        <mask id="mask-20" fill="white">
                            <use xlink:href="#path-19"></use>
                        </mask>
                        <g id="SVGID_1_"></g>
                        <path d="M98.574815,112.859374 L94.8580231,115.047821 L96.1610462,116.380441 C97.3044104,117.229408 98.0529191,117.994335 96.9335896,119.107425 C94.5318382,121.493106 91.9532601,123.707279 89.628763,126.163279 C88.0510578,127.832056 86.2415896,128.507799 84.0303988,128.785642 C80.3960116,129.245285 76.7684913,129.852425 73.1873237,130.620782 C71.4482428,130.992955 69.9289075,130.87633 68.3632197,130.128553 C67.7366012,129.830128 67.0121272,129.723793 66.3237052,129.569436 L69.331474,132.287844 C74.8560173,132.157497 80.3736936,131.630966 85.8999538,131.543497 C88.9437746,131.495475 91.0021734,130.138844 92.9421156,128.032721 C94.7017977,126.122117 96.7189942,124.448196 98.8048613,122.498145 C99.234052,123.753587 99.4503642,124.818654 99.9533757,125.724218" id="Shape" fill="#000000" fill-rule="nonzero" mask="url(#mask-20)"></path>
                    </g>
                </g>
            </g>
        </g>
    </g>
</svg>
                  </div>
                  <div class="newsletter-wrap--head--text">
                    <h5 class="word">Yes, I want to be in the know!</h5>
                    <p class="word-sub font-normal">Be the first to get updates on new products, #partyinspo, and all other fun things. All you have to do is enter your email address below.</p>
                  </div>
                </div>
                <div class="newsletter-wrap--body">
                  <form class="pf-form" novalidate="novalidate" action="" method="post">
                    <div class="form-group">
                      <div class="newsletter-subscribe">
                        <input name="email" type="email" placeholder="Enter your email address">
                        <button class="action" title="Subscribe" type="submit" disabled="disabled">Join</button>
                      </div>
                    </div>
                  </form>
                  <div class="tnc-agreement"><span class="control">
                      <input class="tnc-agreement-checkbox-newsletter" id="tnc-agreement-checkbox-newsletter" name="tnc-agreement-checkbox-newsletter" type="checkbox"></span>
                    <label class="tnc-label textcolorwhite m-l-30" for="tnc-agreement-checkbox-newsletter">I agree to the <a class="textcolorwhite" href="terms-and-conditions">Terms & Conditions</a> and <a class="textcolorwhite" href="privacy-policy-cookie-restriction-mode">Privacy Policy</a></label>
                  </div>
                </div>
                <div class="newsletter-wrap--footer">
                  <p>Copyright © 2017 Partyfairy.com.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </footer>
 <?php wp_footer() ?>
  </body>
</html>