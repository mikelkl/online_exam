<script type="text/javascript">
    var checkText=$("#selector").find("option:selected").text();  //获取Select选择的Text
    var checkValue=$("#selector option:selected").val(); //获取Select选择的Value 
    document.write(checkText);
    if (checkValue==2) {
        $("#Que-Mul").show();
    }
    else
        $("#Que-Essay").show();   


</script>


<div class="collapse" id="collapseExample" style="padding-top: 17px">
    <div class="well">
        <div role="tabpanel">

            <!-- Nav tabs -->
            <ul class="nav nav-pills" role="tablist">
                <li role="presentation" class="active"><a href="#addExam" aria-controls="messages" role="addExam" data-toggle="tab">添加考试</a></li>
                <li role="presentation" class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" aria-controls="messages">添加题目<span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <{section loop=$item name="list"}>
                            <li role="presentation">
                            <{if $item[list].ib_name == "选择题"}>
                            <a href="#Que-Mul" role="menuitem" tabindex="-1" aria-controls="addQue" data-toggle="tab"/>
                            <{else}>
                            <a href="#Que-Essay" role="menuitem" tabindex="-1" aria-controls="addQue" data-toggle="tab">
                            <{/if}>
                            <{$item[list].ib_name}>
                            </a>
                            </li>
                        <{/section}>                                   
                    </ul>
                </li>
                <li role="presentation">
                    <a href="#addQuesLib" aria-controls="messages" role="addQuesLib" data-toggle="tab">添加题型库</a>
                </li>
            </ul>

            <!-- Tab panes -->
            <div class="tab-content">
                <div role="tabpanel" class="tab-pane" id="Que-Mul" style="padding-top: 10px">
                    <div class="form-group">
                        <label class="control-label" for="tp_number">选择题</label>
                        <form>
                            <div class="input-group">
                                <span class="input-group-addon" id="choiceQue">题目</span>
                                <input type="text" class="form-control" placeholder="输入选择题题目" aria-describedby="basic-addon1">
                            </div>
                            <div class="input-group input-group-sm">
                                <span class="input-group-addon" id="optionA">A</span>
                                <input type="text" class="form-control" placeholder="请输入选项A" aria-describedby="sizing-addon3">
                            </div>
                            <div class="input-group input-group-sm">
                                <span class="input-group-addon" id="potionB">B</span>
                                <input type="text" class="form-control" placeholder="请输入选项B" aria-describedby="sizing-addon3">
                            </div>
                            <div class="input-group input-group-sm">
                                <span class="input-group-addon" id="optionC">C</span>
                                <input type="text" class="form-control" placeholder="请输入选项C" aria-describedby="sizing-addon3">
                            </div>
                            <div class="input-group input-group-sm">
                                <span class="input-group-addon" id="optionD">D</span>
                                <input type="text" class="form-control" placeholder="请输入选项D" aria-describedby="sizing-addon3">
                            </div>
                            <div class="input-group input-group-sm">
                                <span class="input-group-addon" id="choiceAns">答案</span>
                                <input type="text" class="form-control" placeholder="请输入答案（A、B、C或D）" aria-describedby="sizing-addon3">
                            </div>
                        </form>
                        <div class="modal-footer">
                            <div class="btn-group-sm" style="float: right">
                                <button type="button" class="btn btn-success"> 确定 </button>
                                <button type="button" class="btn btn-warning"> 取消 </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div role="tabpanel" class="tab-pane" id="Que-Essay" style="padding-top: 10px">
                    <div class="form-group">
                        <label class="control-label" for="tp_number">主观题</label>
                        <form action="<{$app}>/exam/addTq/course_id/<{$course_id}>" method="post">
                            <div class="input-group">
                                <span class="input-group-addon" id="essayQue">题目</span>
                                <textarea class="form-control" name="tq_content" rows="1" placeholder="请输入问答题题目"></textarea>
                            </div>
                            <div class="input-group">
                                <span class="input-group-addon" id="essayAns">答案</span>
                                <textarea class="form-control" name="answer" rows="2" placeholder="请输入参考答案"></textarea>
                            </div>
                        <div class="modal-footer">
                            <div class="btn-group-sm" style="float: right">
                                <input type="submit" value="确定" class="btn btn-success">
                            </div>
                        </div>
                        </form>
                    </div>
                </div>
                <div role="tabpanel" class="tab-pane" id="addQue" style="padding-top: 10px">
                    <h1>待添加</h1>
                </div>
                <div role="tabpanel" class="tab-pane active" id="addExam" style="padding-top: 10px">
                    <form action="<{$app}>/exam/addExam" method="post">
                        <div class="form-group">
                            <label class="control-label" for="tp_number">考试号</label>
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <span class="glyphicon glyphicon-paperclip"></span>
                                </span>
                                <input type="text" class="form-control" name="tp_number" id="tp_number" placeholder="输入您要添加考试的考试号">
                            </div>
                            <span >提示：输入您要添加考试的考试号</span>
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="tp_name">考试名称</label>
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <span class="glyphicon glyphicon-edit"></span>
                                </span>
                                <input type="text" class="form-control" name="tp_name" id="tp_name" placeholder="输入您要添加考试的名称">
                            </div>
                            <span >提示：输入您要添加考试内容的名称</span>
                        </div>
                        <div class="form-group">
                            <label class="control-label" >考试内容</label>
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <span class="glyphicon glyphicon-list"></span>
                                </span>
                                    <div class="input-group-btn" style="width: 35%" >
                                        <select class="form-control" name="ib_id">
                                            <option>请选择题型</option>
                                            <{section loop=$item name="list"}>
                                                <option value="<{$item[list].ib_id}>"><{$item[list].ib_name}></option>
                                            <{/section}>
                                        </select>
                                    </div>
                                    <input type="text" class="form-control" name="each_tp_count" id="each_tp_count" placeholder="请输入题目数量">
                                <span class="input-group-addon btn" onclick="add_tr(this)">
                                    <span class="glyphicon glyphicon-plus"></span>
                                </span>
                                <span class="input-group-addon btn" onclick="del_tr(this)">
                                    <span class="glyphicon glyphicon-minus"></span>
                                </span>
                            </div><!-- /input-group -->
                            <script>
                                var choose_count = 1;
                                function add_tr(obj) {
                                    var tr = $(obj).parent();
                                    tr.after(tr.clone());
                                    choose_count++;
                                }
                                function del_tr(obj) {
                                    if(choose_count > 1)
                                    {
                                        $(obj).parent().remove();
                                        choose_count--;
                                    }
                                }
                            </script>
                            <span>提示：选择您要添加考试的内容</span>
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="start_time">考试时间</label>
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <span class="glyphicon glyphicon-calendar"></span>
                                </span>
                                <input type="text" class="form-control" name="start_time" id="start_time" placeholder="输入您要添加考试的开考时间">
                            </div>
                            <span >提示：输入您要添加考试的开考时间，格式：Y-m-d H:i:s</span>
                            <i class="icon-th"></i>
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="duration">考试时长</label>
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <span class="glyphicon glyphicon-time"></span>
                                </span>
                                <input type="text" class="form-control" name="duration" id="duration" placeholder="输入您要添加考试的时长">
                            </div>
                            <span >提示：输入您要添加考试的时长</span>
                        </div>
                        <input type="hidden" value="<{$course_id}>" name="course_id" />
                        <div class="modal-footer">
                            <div class="btn-group" style="float: right">
                                <input type="submit" class="btn btn-success" value="确定" >
                            </div>
                        </div>
                    </form>
                </div>


                <div role="tabpanel" class="tab-pane" id="addQuesLib" style="padding-top: 10px">
                    <form action="<{$app}>/exam/addItemBank" method="post">
                        <div class="form-group">
                            <label class="control-label" for="tp_number">题型库名称</label>
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <span class="glyphicon glyphicon-tags"></span>
                                </span>
                                <input type="text" class="form-control" name="ib_name" placeholder="输入您要添加的题型库名">
                            </div>
                            <span >提示：输入您要添加的题型库名，如“选择题”“简答题”等等</span>
                        </div>
                        <input type="hidden" value="<{$course_id}>" name="course_id" />
                        <div class="modal-footer">
                            <div class="btn-group" style="float: right">
                                <input type="submit" class="btn btn-success" value="确定" >
                            </div>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>