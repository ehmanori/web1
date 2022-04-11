<tr height=50>
                                  <td align=center  nowrap>서비스</td>
                                  <td height=48px nowrap>
                                    <center>
                                    <select class="form-control" style="padding:0px 15px 0px 15px; width:70%;" id="option_name">                                      
                                          <?php 
                                            $result=mysqli_query($db,"select distinct(option_name) from equip_table where category='$_GET[category]' order by no asc");
                                            while($RD=mysqli_fetch_array($result))
                                            {               
                                              if ($RD[option_name]==$option_name) $selected="selected"; else $selected=null;
                                              echo "<option value='$RD[option_name]' $selected>.htmlspecialchars($RD)[option_name]).</option>";  //sparrow 20220403 XSS해소
                                              //echo htmlspecialchars("<option value={$RD[category]} {$selected}>".$RD[category]."</option>");                                              
                                              //echo htmlspecialchars(<option value='$RD[option_name]' $selected>$RD[option_name]</option>);
                                            }
                                            
                                          ?>
                                    </select>
                                  </td>                 
                                </tr>
