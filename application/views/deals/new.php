<?=$this->load->view("theme/head");?>

<link rel="stylesheet" href="<?=config_item('base_url');?>/assets/js/datepicker/datepicker.css" type="text/css" />

<script src="<?=config_item('base_url');?>/assets/js/app.plugin.js"></script>
<script src="<?=config_item('base_url');?>/assets/js/datepicker/bootstrap-datepicker.js"></script>    
<script src="<?=config_item('base_url');?>/assets/js/wizard/jquery.bootstrap.wizard.js"></script>
<script src="<?=config_item('base_url');?>/assets/js/wizard/demo.js"></script>

  <section>
    <section class="hbox stretch">
        <?=$this->load->view("theme/left-menu");?>
        <section id="content">
        <section class="vbox">
          <section class="scrollable padder">
            <div class="m-b-md">
              <h3 class="m-b-none">Новая сделка</h3>
            </div>
            <div class="row">
              <div class="col-sm-6">
                <form id="wizardform" method="get" action="#">
                  <div class="panel panel-default">
                    <div class="panel-heading">
                      <ul class="nav nav-tabs font-bold">
                        <li><a href="#step1" data-toggle="tab">Добавить сделку</a></li>
                        <li><a href="#step2" data-toggle="tab">Выбрать контакт</a></li>
                        <li><a href="#step3" data-toggle="tab">Выбрать компанию</a></li>
                      </ul>
                    </div>
                    <div class="panel-body">
                      <p></p>
                      <div class="line line-lg"></div>
                      <h4>Процесс заполнения</h4>
                      <div class="progress progress-xs m-t-md">
                        <div class="progress-bar bg-success"></div>
                      </div>
                      <div class="tab-content">
                        <div class="tab-pane" id="step1">
                            <p>Название сделки:</p>
                            <input type="text" class="form-control input-sm" data-trigger="change" data-required="true" placeholder="Например: создание сайта">                            
                            
                            <div class="form-group pull-in clearfix">

                                <div class="col-sm-6">
                                    <p class="m-t">Выручка:</p>
                                    <input type="text" class="form-control input-sm" data-trigger="change" data-required="true" data-type="number" placeholder="Например: 10000">
                                </div>
                                <div class="col-sm-6">
                                    <p class="m-t">Выберите статус:</p>
                                    <div class="btn-group m-r">
                                      <button data-toggle="dropdown" class="btn btn-sm btn-default dropdown-toggle"> <span class="dropdown-label">Выберите статус</span> <span class="caret"></span> </button>
                                      <ul class="dropdown-menu dropdown-select">
                                        <li><a href="#"><input type="radio" name="status">Первичный контакт</a></li>
                                        <li><a href="#"><input type="radio" name="status">Переговоры</a></li>
                                        <li><a href="#"><input type="radio" name="status">Принимают решение</a></li>
                                        <li><a href="#"><input type="radio" name="status">Согласование договора</a></li>
                                        <li><a href="#"><input type="radio" name="status">Успешно реализовано</a></li>
                                        <li><a href="#"><input type="radio" name="status">Закрыто и нереализовано</a></li>
                                      </ul>
                                    </div>
                                </div>
                            </div>
       
                            <p class="m-t">Теги:</p>
                            <input type="text" class="form-control input-sm" data-trigger="change" data-required="true" placeholder="Например: Сайт, битрикс">
                        
                            <?=$this->load->view("deals/new-input");?>
                        
                        </div>
                        <div class="tab-pane" id="step2">
                            
                            <p>Имя Фамилия:</p>
                            <input type="text" class="form-control" data-trigger="change" data-required="true" placeholder="Иван Иванов">
                            
                            <p class="m-t">Номер телефона:</p>
                            <input type="text" class="form-control" data-trigger="change" data-required="true" data-type="number" placeholder="79123456789">
                        
                        </div>
                        <div class="tab-pane" id="step3">This is step 3</div>
                        <ul class="pager wizard m-b-sm">
                          <li class="previous first" style="display:none;"><a href="#">First</a></li>
                          <li class="previous"><a href="#">Previous</a></li>
                          <li class="next last" style="display:none;"><a href="#">Last</a></li>
                          <li class="next"><a href="#">Next</a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </form>
              </div>
              <div class="col-sm-6">
                <form id="guessform">
                  <section class="panel panel-default">
                    <header class="panel-heading">
                      <ul class="nav nav-tabs pull-right">
                        <li><a href="#tab1" data-toggle="tab">Guess</a></li>
                        <li><a href="#tab2" data-toggle="tab">Result</a></li>
                      </ul>
                      <span class="font-bold">Guess Game</span> </header>
                    <div class="panel-body">
                      <div class="tab-content">
                        <div class="tab-pane text-center" id="tab1">
                          <p class="text-center h4 m-t m-b">Guess a number between 1 and 50!</p>
                          <input type="text" class="no-border b-b input-s-sm h1 inline text-center text-success wrapper-lg" id="gn">
                          <p class="text-center h4 m-t m-b text-danger" id="gi">.</p>
                        </div>
                        <div class="tab-pane text-center wrapper-xl" id="tab2">
                          <h1 class="text-danger m-b-xl" id="answer"></h1>
                          <h2 class="text-success m-b-xl">Correct!!</h2>
                          <p class="h4">You guess <span id="count"></span> time(s), [<span id="num"></span> ]</p>
                        </div>
                      </div>
                    </div>
                    <footer class="panel-footer text-right bg-light lter">
                      <ul class="pager wizard m-n">
                        <li class="previous"><a href="#">Try again</a></li>
                        <li class="next"><a href="#">Guess</a></li>
                      </ul>
                    </footer>
                  </section>
                </form>
              </div>
            </div>
          </section>
        </section>
        <a href="#" class="hide nav-off-screen-block" data-toggle="class:nav-off-screen" data-target="#nav"></a> 
        </section>


        
<?=$this->load->view("theme/footer");?>