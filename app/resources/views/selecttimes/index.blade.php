<div class="form-group">
                    <label class="col-sm-1 control-label" for="book_startdate">วันเริ่มต้น: </label>
                    <div class="col-sm-3">
                        <input type="text" class="form-control" size="10" id="datepicker-th" name="book_startdate" value="{{date('Y-m-d',strtotime($start))}}" />
                    </div>
                </div>
                <br>
                <div class="form-group">
                    <label class="col-sm-1 control-label" for="book_starttime">เวลาเริ่มต้น: </label>
                    <div class="col-sm-3">
                        <select class="form-control" name="book_starttime">
                        <?php  $y=30;
                        $time = strtotime('08:00');
                        $startTime = date("H:i", $time);
                        $stack = [];
                        for($h=1;$h<=26;$h++){
                            for($j=0;$j<count($timestart);$j++){
                                if($startTime>=date("H:i",strtotime($timestart[$j])) && $startTime<=date("H:i",strtotime($timeend[$j]))){
                                array_push($stack,$startTime);
                                }
                            }
                           if(in_array($startTime, $stack)){?>
                           <option value="<?php echo $startTime?>" disabled><?php echo $startTime?> </option>
                           <?php }else{?>
                            <option value="<?php echo $startTime?>" ><?php echo $startTime?> </option>
                           <?php }
                            $startTime = date("H:i", strtotime('+'.$y.' minutes', $time));
                            $y+=30;
                        }?>
                            <!--<option value="08:30">08:30</option>
                            <option value="09:00">09:00</option>
                            <option value="09:30">09:30</option>
                            <option value="10:00">10:00</option>
                            <option value="10:30">10:30</option>
                            <option value="11:00">11:00</option>
                            <option value="11:30">11:30</option>
                            <option value="12:00">12:00</option>
                            <option value="12:30">12:30</option>
                            <option value="13:00">13:00</option>
                            <option value="13:30">13:30</option>
                            <option value="14:00">14:00</option>
                            <option value="14:30">14:30</option>
                            <option value="15:00">15:00</option>
                            <option value="15:30">15:30</option>
                            <option value="16:00">16:00</option>
                            <option value="16:30">16:30</option>
                            <option value="17:00">17:00</option>
                            <option value="17:30">17:30</option>
                            <option value="18:00">18:00</option>
                            <option value="18:30">18:30</option>
                            <option value="19:00">19:00</option>
                            <option value="19:30">19:30</option>-->
                        </select>
                    </div>
                </div>
                <br>
                <div class="form-group">
                    <label class="col-sm-1 control-label" for="book_enddate">วันสิ้นสุด: </label>
                    <div class="col-sm-3">
                        <input type="text" class="form-control" size="10" id="datepicker-th-2" name="book_enddate" value="{{date('Y-m-d',strtotime($start))}}" />
                    </div>
                </div> 
                <br>
                <div class="form-group">
                    <label class="col-sm-1 control-label" for="book_endtime">เวลาสิ้นสุด: </label>
                    <div class="col-sm-3">
                        <select class="form-control" name="book_endtime">
                        <?php  $y=30;
                        $time = strtotime('08:30');
                        $startTime = date("H:i", $time);
                        $stack = [];
                        for($h=1;$h<=26;$h++){
                            for($j=0;$j<count($timestart);$j++){
                                if($startTime>=date("H:i",strtotime($timestart[$j])) && $startTime<=date("H:i",strtotime($timeend[$j]))){
                                array_push($stack,$startTime);
                                }
                            }
                           if(in_array($startTime, $stack)){?>
                           <option value="<?php echo $startTime?>" disabled><?php echo $startTime?> </option>
                           <?php }else{?>
                            <option value="<?php echo $startTime?>" ><?php echo $startTime?> </option>
                           <?php }
                            $startTime = date("H:i", strtotime('+'.$y.' minutes', $time));
                            $y+=30;
                        }?>
                        </select>
                    </div>
                </div>