<section class="links" style="margin-bottom: 30px;" />
<h1 class="section-heading text-highlight rightbar-link-bg">
    <span class="line">শিক্ষার্থীর উপস্থিতি</span></h1>
    <div class="section-content sidebar-box">
        <div class="box-wrapper nav-box">
            <div class="pie-chart-box">
                <div class="atten-title"> <h5>
                    ({{ getBanglaMonth(date('d-m-Y'))}})


                </h5>

            </div>
            <div>
                <table class="table">
                    <thead>
                      <tr>
                        <th width="50%"></th>
                        <th width="40%"></th>
                        
                    </tr>
                </thead>
                <tbody>
                    <tr class="st-total-bg">
                        <td width="30%">মোট ছাত্র ছাত্রী</td>
                        <td id="">0</td>
                    </tr>
                    <tr class="st-success-bg">
                        <td>মোট উপস্থিত</td>
                        <td id="">0 %</td>
                    </tr>
                    <tr class="st-denger-bg">
                        <td width="30%">মোট অনুপস্থিত</td>
                        <td  id="">0 %</td>
                    </tr>
                    <tr class="st-success-bg">
                        <td>ছাত্র উপস্থিত</td>
                        <td id="">0 %</td>
                    </tr>
                    <tr class="st-success-bg">
                        <td>ছাত্রী উপস্থিত</td>
                        <td id="">0 %</td>
                    </tr>
                </tbody>
                
            </table>
        </div>   
        
        <canvas id="mycanvas" width="200" height="200"></canvas>
        <!-- script file -->
        <script>
            $(document).ready(function(){
                var ctx = $("#mycanvas").get(0).getContext("2d");
                                //pai chart data
                                //sum of value = 360

                                var data = [
                                { 
                                    value: 0,
                                    color: "#00a946",
                                    highlight: "#082233",
                                    lable: "Normal weight" 

                                },

                                { 
                                    value: 360,
                                    color: "red",
                                    highlight: "lightskyblue",
                                    lable: "Obese" 

                                }
                                
                                ];

                                var piechart = new Chart(ctx).Pie(data);
                            });
                        </script>

                    </div><!--//pie-chart-box-->
                </div> <!-- /.box-wrapper -->   
            </div> <!-- /.section-content -->   

            <!--//section-content-->
        </section>