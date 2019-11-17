<section class="links" style="margin-bottom: 30px;">
        <h1 class="section-heading text-highlight">
            <span class="line">শিক্ষকের উপস্থিতি</span></h1>
        <div class="section-content sidebar-box">
        <div class="box-wrapper nav-box">
            <div class="pie-chart-box">
                <div class="atten-title"><h5>
                        (2018) </h5></div>
                <div>
                <table class="table">
                    <thead>
                      <tr style="background: #04727b;">
                        <th width="50%">শিক্ষক</th>
                        <th width="20%">মোট</th>
                        
                      </tr>
                    </thead>
                    <tbody>
                        <tr class="st-total-bg" style="background: #086067;">
                            <td width="30%">মোট শিক্ষক </td>
                            <td id="total_std">350</td>
                        </tr>
                        <tr class="st-success-bg">
                            <td>উপস্থিত</td>
                            <td id="total_present_std">0 %</td>
                        </tr>
                        <tr class="st-denger-bg">
                            <td width="30%">ছুটিতে আছেন </td>
                            <td  id="total_absent_std">0 %</td>
                        </tr>
                        </tbody>
                  </table>
            </div>   
            
        <canvas id="mycanvas2" width="200" height="200"></canvas>
            <script>
                $(document).ready(function(){
                    var ctx = $("#mycanvas2").get(0).getContext("3d");
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
                            value: 380,
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