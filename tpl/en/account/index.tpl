{strip}
{include file='headercabinet.tpl' title='Security settings'}

<div class="page-heading">
    <div class="col-lg-9 col-sm-12 col-md-9 col-xs-12" style="padding-left: 0px;">
        <h1>Security settings</h1>
    </div>
    <div class="clear"></div>
</div>

    <div class="settings-box animated fadeInDown">
      <div class="settings-nav clearfix">
      	<a href="/account" class="active">
          <i class="fa fa-cogs"></i> Security settings
        </a>
        <a href="/balance/wallets" class="">
          <i class="fa fa-money"></i> Payment settings
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
            <h2><i class="fa fa-cogs"></i> Security settings</h2>
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
        'Your name!!',
        [
          'name_empty'=>'Set name'
        ],
        'readonly'=>$_cfg.Account_LockData,
        'skip'=>($_cfg.Account_UseName == 0)
      ],
    'uLogin'=>
      [
        'X',
        'Your login',
        0,
        'skip'=>$_cfg.Const_NoLogins
      ],
    'uMail'=>
      [
        'X',
        'Your E-mail'
      ],
    'aTel'=>
      [
        'T',
        'Your phone number!! <<with country code>>',
        [
          'tel_wrong'=>'Incorrect number'
        ],
        'skip'=>!$_cfg.SMS_REG
      ],
    'TZ'=>
      [
        'T',
        'Your time-zone!! <<relatively to GMT>>',
        [
          'tz_wrong'=>'Incorrect format [h:m]'
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
    'GACode'=>['T', 'and enter the code from mobile application', ['ga_wrong' => 'Incorrect code']],
    99=>'',
    'aIPSec'=>
      [
        'S',
        'IP-address change check',
        0,
        [
          0=>'- default -', 
          1=>'x.0.0.0', 
          2=>'x.x.0.0', 
          3=>'x.x.x.0', 
          4=>'x.x.x.x'
        ]
      ],
    'aTimeOut'=>['I', 'Automatically log out after N minutes'],
    'aSQuestion'=>
      [
        'T',
        'Checking question!!',
        [
          'secq_empty'=>'Set question',
          'secq_short'=>"Question is too short [not less than {$_cfg.Sec_MinSQA} symbols]"
        ],
        'skip'=>($_cfg.Sec_MinSQA == 0),
        'size'=>40
      ],
    'aSAnswer'=>
      [
        '*',
        'Checking answer <<fill in to change>>',
        [
          'seca_empty'=>'Set answer',
          'seca_short'=>"Answer is too short [not less than {$_cfg.Sec_MinSQA} symbols]",
          'seqa_equal_secq'=>'Answer can not be equal to question'
        ],
        'skip'=>($_cfg.Sec_MinSQA == 0),
        'size'=>40
      ],
    'PIN'=>
      [
        '*',
        'Enter PIN-code!! <<to confirm changes>>',
        [
          'pin_wrong'=>'Incorrect code'
        ],
        'skip'=>($_cfg.Sec_MinPIN == 0),
        'size'=>8
      ],
      'aSessIP'=>['C', 'Bound session to IP-address'],
      'aSessUniq'=>['C', 'Forbid parallel sessions'],
      'aNoMail'=>
      [
        'C',
        'Do not recieve notifications',
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
            <i class="fa fa-cogs"></i> Profiles
          </a>
          {/if}

          {if !$_cfg.Account_LockData}
          <a href="{_link module='account/change_mail'}">
            <i class="fa fa-envelope"></i> Change E-mail
          </a>
          {/if}

          <a href="{_link module='account/change_pass'}">
            <i class="fa fa-lock"></i> Change password
          </a>

        </div>
        <br><br>

        {/if}

  </div>

{if $_cfg.Sec_ForceReConfig and $user.aNeedReConfig}

	<p class="info">
		Before to start working you must fill in your personal data.
	</p>
	
{/if}


{include file='footercabinet.tpl'}

{/strip}
