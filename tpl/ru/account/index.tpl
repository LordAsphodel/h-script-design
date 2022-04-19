{strip}
{include file='headercabinet.tpl' title='Личные параметры'}

<div class="page-heading">
    <div class="col-lg-9 col-sm-12 col-md-9 col-xs-12" style="padding-left: 0px;">
        <h1>Личные параметры</h1>
    </div>
    <div class="clear"></div>
</div>

    <div class="settings-box animated fadeInDown">
      <div class="settings-nav clearfix">
      	<a href="/account" class="active">
          <i class="fa fa-cogs"></i> Безопасность
        </a>
        <a href="/balance/wallets" class="">
          <i class="fa fa-money"></i> Мои реквизиты
        </a>
      </div>
      <div class="settings-content clearfix">


          <!-- <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 pull-right" style="padding-top: 10px;">
            <h2><i class="fa fa-photo"></i> Фото профиля</h2>
            <div class="s-divider" style="margin-top: 20px; margin-bottom: 20px;"></div>
            <p id="photo_upload_error" style="background: #ffd7d7; padding: 20px; margin-bottom: 20px; border-left: 5px solid #fb7777; display: none;"></p>
            <div class="settings-photo">
              <div class="photo-av">
                <img id="profile_photo_img" src="img/18733_c6677afa2f76650cbeb102f1b00b591151e31ffe_m150.jpg" />
                              </div>
              <div class="progress active" style="display: none;">
                <div class="progress-bar progress-bar-success" role="progressbar" id="profile_photo_progress" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%">
                  <span class="sr-only">0% Complete (success)</span>
                </div>
              </div>
              <div class="bz-btn bz-btn-green" style="margin-bottom: 6px; position: relative; overflow: hidden;">
                <input type="file" name="profile_photo" onchange="App.profilePhotoUpload(this);" accept="image/*" class="btn-file-input" />
                Загрузить фото              </div>
              <div class="bz-btn bz-btn-default" style="margin-bottom: 6px; display: none;">
                Изменить миниатюру
              </div>
              <div class="bz-btn bz-btn-default" style="margin-bottom: 6px; display: none;">
                Удалить фото
              </div>
            </div>
            <p style="text-align: center; margin-top: 30px; font-size: 14px;">
              Для загрузки подходят изображения с расширениями: <b>jpeg, jpg, png</b>.<br/> Максимальный размер файла: <b>2 МБ</b>.            </p>
          </div> -->


          <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" style="border-right: 1px solid #eee; padding-top: 10px;">
            <h2><i class="fa fa-cogs"></i> Безопасность</h2>
            <div class="s-divider" style="margin-top: 20px; margin-bottom: 40px;"></div>
            <p id="profile_common_save_success" class="col-md-6 col-sm-12 col-xs-12 col-md-offset-3" style="background: #f3e68e; padding: 20px; margin-bottom: 20px; border-left: 5px solid #f1d200; display: none;"></p>
            <p id="profile_common_save_error" class="col-md-6 col-sm-12 col-xs-12 col-md-offset-3" style="background: #ffbeaa; padding: 20px; margin-bottom: 20px; border-left: 5px solid #f16400; display: none;"></p>


{include file='medit.tpl'
  url='*'
  form_class='form-horizontal'
  row_wrap='settings-form-group form-group'
  label_class='col-sm-6 control-label'
  input_class='form-control'
  input_wrap='col-sm-6'
  btn_class='btn btn-primary col-sm-6 col-sm-offset-6'
  btn_wrapp='settings-bottom clearfix'
  fields=
  [
    'Avatar'=>
      [
        'U',
        'account/_avatar.box.tpl',
        'skip'=>!$_cfg.Account_UseAvatar
      ],
    'aName'=>
      [
        'T',
        'Ваше имя!!',
        [
          'name_empty'=>'укажите имя'
        ],
        'readonly'=>$_cfg.Account_LockData,
        'skip'=>($_cfg.Account_UseName == 0)
      ],
    'uLogin'=>
      [
        'X',
        'Ваш логин',
        0,
        'skip'=>$_cfg.Const_NoLogins
      ],
    'uMail'=>
      [
        'X',
        'Ваш e-mail'
      ],
    'aTel'=>
      [
        'T',
        'Ваш номер телефона!! <<с кодом страны>>',
        [
          'tel_wrong'=>'неверный номер'
        ],
        'skip'=>!$_cfg.SMS_REG
      ],
    'TZ'=>
      [
        'T',
        'Ваш часовой пояс!! <<от GMT>>',
        [
          'tz_wrong'=>'неверное смещение [ч:м]'
        ],
        default=>$utz,
        'size'=>6
      ],
    98=>'',
    'GA'=>
      [
        'U',
        'account/_ga.box.tpl'
      ],
    'GACode'=>['T', 'и введите код из приложения', ['ga_wrong' => 'неверный код']],
    99=>'',
    'aIPSec'=>
      [
        'S',
        'Контроль смены IP-адреса',
        0,
        [
          0=>'- по умолчанию -', 
          1=>'x.0.0.0', 
          2=>'x.x.0.0', 
          3=>'x.x.x.0', 
          4=>'x.x.x.x'
        ]
      ],
    'aTimeOut'=>['I', 'Автовыход через N минут'],
    'aSQuestion'=>
      [
        'T',
        'Контрольный вопрос!!',
        [
          'secq_empty'=>'укажите вопрос',
          'secq_short'=>"вопрос слишком короткий [не менее {$_cfg.Sec_MinSQA}]"
        ],
        'skip'=>($_cfg.Sec_MinSQA == 0),
        'size'=>40
      ],
    'aSAnswer'=>
      [
        '*',
        'Контрольный ответ <<заполните чтобы сменить>>',
        [
          'seca_empty'=>'укажите ответ',
          'seca_short'=>"ответ слишком короткий [не менее {$_cfg.Sec_MinSQA}]",
          'seqa_equal_secq'=>'ответ не может совпадать с вопросом'
        ],
        'skip'=>($_cfg.Sec_MinSQA == 0),
        'size'=>40
      ],
    'PIN'=>
      [
        '*',
        'Введите PIN-код!! <<чтобы подтвердить изменения>>',
        [
          'pin_wrong'=>'неверный код'
        ],
        'skip'=>($_cfg.Sec_MinPIN == 0),
        'size'=>8
      ],
      'aSessIP'=>['C', 'Привязывать сессию к IP'],
      'aSessUniq'=>['C', 'Запретить параллельные сессии'],
      'aNoMail'=>
      [
        'C',
        'Не получать оповещения',
        'skip'=>$_cfg.Msg_NoMail
      ]
  ]
  values=$user
  hide_cancel=$user.aNeedReConfig
}


            
          </div>
        </div>

        {if !($_cfg.Sec_ForceReConfig and $user.aNeedReConfig)}

        <div class="settings-nav clearfix">

          {if $_cfg.Account_Loginza}
          <a href="{_link module='account/loginza'}">
            <i class="fa fa-cogs"></i> Профили
          </a>
          {/if}

          {if !$_cfg.Account_LockData}
          <a href="{_link module='account/change_mail'}">
            <i class="fa fa-envelope"></i> Сменить e-mail
          </a>
          {/if}

          <a href="{_link module='account/change_pass'}">
            <i class="fa fa-lock"></i> Сменить пароль
          </a>

        </div>
        <br><br>

        {/if}

  </div>

{if $_cfg.Sec_ForceReConfig and $user.aNeedReConfig}

	<p class="info">
		Перед началом работы Вы должны задать свои личные параметры
	</p>
	
{/if}


{include file='footercabinet.tpl'}

{/strip}