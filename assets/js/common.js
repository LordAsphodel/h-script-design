function number_format( number, decimals, dec_point, thousands_sep ) {	// Format a number with grouped thousands

	var i, j, kw, kd, km;

	// input sanitation & defaults
	if( isNaN(decimals = Math.abs(decimals)) ){
		decimals = 2;
	}
	if( dec_point == undefined ){
		dec_point = ",";
	}
	if( thousands_sep == undefined ){
		thousands_sep = ".";
	}

	i = parseInt(number = (+number || 0).toFixed(decimals)) + "";

	if( (j = i.length) > 3 ){
		j = j % 3;
	} else{
		j = 0;
	}

	km = (j ? i.substr(0, j) + thousands_sep : "");
	kw = i.substr(j).replace(/(\d{3})(?=\d)/g, "$1" + thousands_sep);
	//kd = (decimals ? dec_point + Math.abs(number - i).toFixed(decimals).slice(2) : "");
	kd = (decimals ? dec_point + Math.abs(number - i).toFixed(decimals).replace(/-/, 0).slice(2) : "");


	return km + kw + kd;
}

function getXmlHttp() {
  var xmlhttp;
  try {
    xmlhttp = new ActiveXObject("Msxml2.XMLHTTP");
  } catch (e) {
    try {
      xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
    } catch (E) {
      xmlhttp = false;
    }
  }
  if (!xmlhttp && typeof XMLHttpRequest!='undefined') {
    xmlhttp = new XMLHttpRequest();
  }
  return xmlhttp;
}

//

function userControl ( t )
{
  $.ajax({
    type: 'POST',
    url: '/al/users.php',
    data: {id: $(t).attr('data-user-id'), action: 'get_info'}
  }).done(function( j ) {
    j = $.parseJSON(j);

    App.loadUserInfo(j);

  }).fail(function() {
    console.log('fail');
  });
}

function acceptRefill ( t )
{
  if(confirm('РџРѕРґС‚РІРµСЂРґРёС‚СЊ РїРѕРїРѕР»РЅРµРЅРёРµ Р±Р°Р»Р°РЅСЃР°?'))
  {
    inp = $('#deposit'+$(t).attr('data-id')+'-input');

    if (inp.val().length === 0)
    {
      inp.focus();
      return;
    }

    $.ajax({
      type: 'POST',
      url: '/al/refill.php',
      data: {id: $(t).attr('data-id'), sum: inp.val(), action: 'accept_refill'}
    }).done(function( j ) {
      j = $.parseJSON(j);
      console.log(j);

      if ( j['success'] )
      {
        $('#deposit'+$(t).attr('data-id')).css('background', '#d9efda').fadeOut(500, function () {
          $(this).remove();
        });
      }

    }).fail(function() {
      console.log('fail');
    });
  }
}

function acceptWithdraw ( t )
{
  if(confirm('РџРѕРґС‚РІРµСЂРґРёС‚СЊ РІС‹РІРѕРґ РїСЂРёР±С‹Р»Рё?'))
  {
    inp = $('#deposit'+$(t).attr('data-id')+'-input');

    if (inp.val().length === 0)
    {
      inp.focus();
      return;
    }

    $.ajax({
      type: 'POST',
      url: '/al/refill.php',
      data: {id: $(t).attr('data-id'), voucher: inp.val(), action: 'accept_withdraw'}
    }).done(function( j ) {
      j = $.parseJSON(j);
      console.log(j);
      if ( j['success'] )
      {
        $('#deposit'+$(t).attr('data-id')).css('background', '#d9efda').fadeOut(500, function () {
          $(this).remove();
        });
      }

    }).fail(function() {
      console.log('fail');
    });
  }
}

function acceptRW ( t, c )
{
  var txt = 'РџРѕРґС‚РІРµСЂРґРёС‚СЊ РїРѕРїРѕР»РЅРµРЅРёРµ Р±Р°Р»Р°РЅСЃР°?';
  if (c == 'withdraw') txt = 'РџРѕРґС‚РІРµСЂРґРёС‚СЊ РІС‹РІРѕРґ РїСЂРёР±С‹Р»Рё?';

  inp = $('#deposit'+$(t).attr('data-id')+'-input');

  if (inp.val().length === 0)
  {
    inp.focus();
    return;
  }

  $.ajax({
    type: 'POST',
    url: '/al/refill.php',
    data: {id: $(t).attr('data-id'), text: inp.val(), action: 'accept_'+c}
  }).done(function( j ) {
    j = $.parseJSON(j);
    console.log(j);
    if ( j['success'] )
    {
      $('#deposit'+$(t).attr('data-id')).hide(0, function () {
        $(this).remove();
      });
    }
  }).fail(function() {
    console.log('fail');
  });

}

function acceptPerfectMoneyW ( t )
{
	$.ajax({
    type: 'POST',
    url: '/al/perfectmoney_withdraw.php',
    data: {id: $(t).attr('data-id'), action: 'withdraw'}
  }).done(function( j ) {
    j = $.parseJSON(j);
    console.log(j);
    if ( j['success'] )
    {
      $('#deposit'+$(t).attr('data-id')).hide(0, function () {
        $(this).remove();
      });
    }
		else
		{
			alert(j[1]);
		}
  }).fail(function() {
    console.log('fail');
  });
}

function acceptAdvCashW ( t )
{

	$(t).off('click');

	$.ajax({
    type: 'POST',
    url: '/al/advcash_withdraw.php',
    data: {id: $(t).attr('data-id'), action: 'withdraw'}
  }).done(function( j ) {
    j = $.parseJSON(j);
    console.log(j);
    if ( j['success'] )
    {
      $('#deposit'+$(t).attr('data-id')).hide(0, function () {
        $(this).remove();
      });
    }
		else
		{
			alert(j[1]);
		}
  }).fail(function() {
    console.log('fail');
  });
}

function acceptAdvCashWALL ( t )
{
	if (confirm('РџРѕРґС‚РІРµСЂРґРёС‚СЊ?'))
	{
		if (confirm('РџРѕРґС‚РІРµСЂРґРёС‚СЊ x2?'))
		{
			$(t).hide();

			$.ajax({
				type: 'POST',
				url: '/al/advcash_withdraw_all.php',
				data: {action: 'withdraw'}
			}).done(function( j ) {
				try {
					j = $.parseJSON(j);
				}
				catch (e)
				{
					console.warn(e);
				}
				console.log(j);
			}).fail(function() {
				console.log('fail');
			});
		}
	}
}

function startBTCWALL ( t )
{
	$.ajax({
		type: 'POST',
		url: '/al/btc_withdrawal.php',
		data: {action: 'start'}
	}).done(function( j ) {
		try {
			j = $.parseJSON(j);

			if (j['success'])
			{
				$('#btc_withdraw_address').html('РђРґСЂРµСЃ РґР»СЏ РїРѕРїРѕР»РЅРµРЅРёСЏ: <b>'+j['address']+'</b>');
				$('#btc_withdraw_amount').html('РЎСѓРјРјР° РІС‹РІРѕРґР° РІ BTC: '+j['amount']);
				$('#btc_withdraw_amount_usd').html('РЎСѓРјРјР° РІС‹РІРѕРґР° РІ РґРѕР»Р»Р°СЂР°С…: '+j['amount_usd']+' (0.001 BTC РєРѕРјРёСЃСЃРёСЏ)');
				$('#btc_withdraw_balance').html(j['balance']+' BTC');

				$('#withdraw-btc').modal('show');
			}

		}
		catch (e)
		{
			console.warn(e);
		}
		console.log(j);
	}).fail(function() {
		console.log('fail');
	});
}

function btcUpdate ()
{
	$.ajax({
		type: 'POST',
		url: '/al/btc_withdrawal.php',
		data: {action: 'update'}
	}).done(function( j ) {
		try {
			j = $.parseJSON(j);

			if (j['success'])
			{
				$('#btc_withdraw_address').html('РђРґСЂРµСЃ РґР»СЏ РїРѕРїРѕР»РЅРµРЅРёСЏ: <b>'+j['address']+'</b>');
				$('#btc_withdraw_amount').html('РЎСѓРјРјР° РІС‹РІРѕРґР° РІ BTC: '+j['amount']);
				$('#btc_withdraw_amount_usd').html('РЎСѓРјРјР° РІС‹РІРѕРґР° РІ РґРѕР»Р»Р°СЂР°С…: '+j['amount_usd']+' (0.001 BTC РєРѕРјРёСЃСЃРёСЏ)');
				$('#btc_withdraw_balance').html(j['balance']+' BTC');
			}

		}
		catch (e)
		{
			console.warn(e);
		}
		console.log(j);
	}).fail(function() {
		console.log('fail');
	});
};

function btcWithdrawal ()
{
	if (confirm('РџСЂРѕРІРµСЃС‚Рё РІС‹РІРѕРґ?'))
	{
		$('#btc_withdraw_button').attr('disabled', 'disable').removeAttr('onclick').off('click');
		$.ajax({
			type: 'POST',
			url: '/al/btc_withdrawal.php',
			data: {action: 'withdraw'}
		}).done(function( j ) {
			try {
				j = $.parseJSON(j);

				if (j['success'])
				{
				}

			}
			catch (e)
			{
				console.warn(e);
			}
			console.log(j);
		}).fail(function() {
			console.log('fail');
		});
	}
};

function acceptPerfectMoneyWALL ( t )
{
	if (confirm('РџРѕРґС‚РІРµСЂРґРёС‚СЊ?'))
	{
		if (confirm('РџРѕРґС‚РІРµСЂРґРёС‚СЊ x2?'))
		{
			$(t).hide();

			$.ajax({
				type: 'POST',
				url: '/al/perfectmoney_withdraw_all.php',
				data: {action: 'withdraw'}
			}).done(function( j ) {
				try {
					j = $.parseJSON(j);
				}
				catch (e)
				{
					console.warn(e);
				}
				console.log(j);
			}).fail(function() {
				console.log('fail');
			});
		}
	}
}

function deleteRW ( t, c )
{
  var txt = 'РџРѕРґС‚РІРµСЂРґРёС‚СЊ РѕС‚РєР»РѕРЅРµРЅРёРµ РїРѕРїРѕР»РЅРµРЅРёСЏ?';
  if (c == 'withdraw') txt = 'РџРѕРґС‚РІРµСЂРґРёС‚СЊ РѕС‚РєР»РѕРЅРµРЅРёРµ РІС‹РІРѕРґР°?';

  if(confirm(txt))
  {
    $.ajax({
      type: 'POST',
      url: '/al/refill.php',
      data: {id: $(t).attr('data-id'), action: 'delete_'+c}
    }).done(function( j ) {
      j = $.parseJSON(j);
      console.log(j);
      if ( j['success'] )
      {
        $('#deposit'+$(t).attr('data-id')).hide(0, function () {
          $(this).remove();
        });
      }

    }).fail(function() {
      console.log('fail');
    });
  }
}

$(function()
{

	$('.hide_all_errors_form').submit(function (e) {
		$('#auhorize-form-error').hide();
		$('#register-form-error').hide();

		$('#restore_success_p').hide();
		$('#restore_error_p').hide();
		$('#restore_ch_error_p').hide();
		$('#restore_ch_success_p').hide();
	});

	var form_loading = false;

  // $('form').submit(function(e) {
		// if (form_loading) {
		// 	e.preventDefault();
		// 	return;
		// }

  //   var $form = $(this);
		// var button = $form.find('input[type=submit],button[type=submit]');
		// var button_val = '';

		// button_val = button.html();
		// button.html('<i class="fa fa-spinner fa-spin"></i>').attr('disabled', 'true');

  //   $.ajax({
  //     type: $form.attr('method'),
  //     url: $form.attr('action'),
  //     data: $form.serialize()+'&ajax=1'
  //   }).done(function(msg) {

		// 	form_loading = false;
		// 	$form.find('input[type=submit],button[type=submit]').html(button_val).removeAttr('disabled');
  //     msg = $.parseJSON(msg);

  //     App.formDone( msg );

  //   }).fail(function() {
		// 	form_loading = false;
		// 	$form.find('input[type=submit],button[type=submit]').html(button_val).removeAttr('disabled');
  //         console.log('fail');
  //   });
  //       //РѕС‚РјРµРЅР° РґРµР№СЃС‚РІРёСЏ РїРѕ СѓРјРѕР»С‡Р°РЅРёСЋ РґР»СЏ РєРЅРѕРїРєРё submit
  //   e.preventDefault();
  // });

});

/* Functions */
function getRandomInt ( min, max )
{
  return Math.floor( Math.random() * ( max - min ) ) + min;
}

function genPasswd ()
{
  var str = '';
	var pattern = '0123456789qwertyuiopasdfghjklzxcvbnmQWERTYUIOPASDFGHJKLZXCVBNM';
	var max_position = pattern.length - 1;
  var position = 0;
	for ( i = 0; i < 12; ++i ) {
	  position = Math.floor ( Math.random() * max_position );
		str = str + pattern.substring(position, position + 1);
	}
	return str;
}
/* App */

var App = {};

App.formDone = function ( j )
{
  switch (j['form']) {
		case 'end-codecard':
			App.endCodeCard( j );
			break;
		case 'end-codecard-d':
			App.endCodeCardD( j );
			break;
		case 'profile-verify':
			App.profileVerify( j );
			break;
    case 'authorize':
      App.authorize( j );
      break;
    case 'register':
      App.register( j );
      break;
    case 'user-edit':
      App.userEdit( j );
      break;
    case 'language-add':
      App.languageAdd( j );
      break;
    case 'start-refill':
      App.startRefill( j );
      break;
    case 'refill-accept':
      App.refillAccept( j );
    case 'withdraw-add':
      App.withdrawAdd( j );
      break;
    case 'change-wallets-km':
      App.changeWalletsKM( j );
      break;
		case 'keymap-off-km':
			App.keymapOffKM( j );
			break;
		case 'ga-secret-d-set':
			App.gaSecretDSet( j );
			break;
		case 'ga-secret-set':
			App.gaSecretSet( j );
			break;
		case 'change-wallets':
	    App.changeWallets( j );
	    break;
    case 'change-password':
      App.alertifyShow( j );
      break;
    case 'withdraw-percent':
      App.withdrawPercent( j );
      break;
		case 'add-profit':
			App.addProfit( j );
			break;
		case 'restore-start':
	    App.restoreStart( j );
	    break;
		case 'r-change-password':
		  App.rChangePassword( j );
		  break;
		case 'show-alertify':
			App.alertifyShow( j );
			break;
		case 'make-keymap':
			App.makeKeyMap( j );
			break;
		case 'ip-protection-save':
			App.saveProtectionIP ( j );
			break;
		case 'profile_popup_save':
			App.profilePopupSave( j );
			break;
    default:
      break;
  }
};

App.userVerify = function (uid)
{
	$.ajax({
		type: 'POST',
		url: '/al/users.php',
		data: {action: 'user_verify', uid: uid}
	}).done(function( j ) {
		j = $.parseJSON(j);

		if ( j['success'] )
		{
			$('#userrow'+uid).remove();
		}

	}).fail(function() {
		console.log('fail');
	});
};

App.profileVerify = function ( j )
{
	if (j['hide'])
	{
		$('#docs_verify_modal').fadeOut(100);
	}
	if (j['text'])
	{
		$('#profile_verify_error').text(j['text']).fadeIn(100);
	}
};

App.profilePopupSave = function ( j )
{
	if (j['success'])
	{
		window.location.href = '/cabinet/profile';
	}
};

App.saveProtectionIP = function ( j )
{
	if (j['success'])
	{
		$('#ip_protection_on_error').hide();
		$('#ip_protection_on_success').text(j['text']).fadeIn(100);
	}

	if (j['error'])
	{
		$('#ip_protection_on_success').hide();
		$('#ip_protection_on_error').text(j['text']).fadeIn(100);
	}
};

var PhotoUploadJCrop = null;
var PhotoUploadSelect = null;
var PhotoMiniJCrop = null;

App.profilePassportUpload = function ( inp )
{
	if (!inp.files[0])
	{
		return;
	}

	var xhr = getXmlHttp();
	if (xhr === false)
	{
		return;
	}

	$('#passport_upload_progress_d').css('width', '0%');
	$('#passport_upload_error, #passport_upload_button').hide();

	var photo = inp.files[0];
	var formData = new FormData();
	var percent = 0;

	formData.append('photo', photo);

	xhr.upload.onprogress = function (e)
	{
		percent = e.loaded / e.total * 100;
		$('#passport_upload_progress_d').css('width', percent+'%');
	};
	$('#passport_upload_progress').show();

	xhr.onload = xhr.onerror = function() {
    if (this.status == 200) {
      log(this.responseText);
			var j = $.parseJSON( this.responseText );
			$('#passport_upload_progress').hide();
			if (j[0])
			{
				// Р·Р°РіСЂСѓР·РёРј РёР·РѕР±СЂР°Р¶РµРЅРёРµ Р·Р°РіСЂСѓР¶РµРЅРЅРѕРµ
				$('#passport_loaded_img').attr('src', j[1]);
				$('#passport_loaded_box').show();
			}
			else
			{
				$('#passport_upload_error').text(j[1]).fadeIn(100);
				$('#passport_upload_button').show();
			}

    } else {
      log("error " + this.status);
    }
  };

	xhr.open('POST', '/al/profile_passport.php', true);
	xhr.send(formData);
};

App.profileLocateUpload = function ( inp )
{
	if (!inp.files[0])
	{
		return;
	}

	var xhr = getXmlHttp();
	if (xhr === false)
	{
		return;
	}

	$('#locate_upload_progress_d').css('width', '0%');
	$('#locate_upload_error, #locate_upload_button').hide();

	var photo = inp.files[0];
	var formData = new FormData();
	var percent = 0;

	formData.append('photo', photo);

	xhr.upload.onprogress = function (e)
	{
		percent = e.loaded / e.total * 100;
		$('#locate_upload_progress_d').css('width', percent+'%');
	};
	$('#locate_upload_progress').show();

	xhr.onload = xhr.onerror = function() {
    if (this.status == 200) {
      log(this.responseText);
			var j = $.parseJSON( this.responseText );
			$('#locate_upload_progress').hide();
			if (j[0])
			{
				// Р·Р°РіСЂСѓР·РёРј РёР·РѕР±СЂР°Р¶РµРЅРёРµ Р·Р°РіСЂСѓР¶РµРЅРЅРѕРµ
				$('#locate_loaded_img').attr('src', j[1]);
				$('#locate_loaded_box').show();
			}
			else
			{
				$('#locate_upload_error').text(j[1]).fadeIn(100);
				$('#locate_upload_button').show();
			}

    } else {
      log("error " + this.status);
    }
  };

	xhr.open('POST', '/al/profile_locate.php', true);
	xhr.send(formData);
};

// Cancel photo
App.removePassport = function ()
{
	$.ajax({
		type: 'POST',
		url: '/al/cabinet.php',
		data: {action: 'passport_remove'}
	}).done(function( j ) {
		j = $.parseJSON(j);

		if ( j['success'] )
		{
			$('#passport_loaded_box').hide();
			$('#passport_upload_button').show();
		}

	}).fail(function() {
		console.log('fail');
	});
};

App.removeLocate = function ()
{
	$.ajax({
		type: 'POST',
		url: '/al/cabinet.php',
		data: {action: 'locate_remove'}
	}).done(function( j ) {
		j = $.parseJSON(j);

		if ( j['success'] )
		{
			$('#locate_loaded_box').hide();
			$('#locate_upload_button').show();
		}

	}).fail(function() {
		console.log('fail');
	});
};

App.profilePhotoUpload = function ( inp )
{
	if (!inp.files[0])
	{
		return;
	}

	var xhr = getXmlHttp();
	if (xhr === false)
	{
		return;
	}

	$('#profile_photo_progress').css('width', '0%');
	$('#photo_upload_error').hide();

	var photo = inp.files[0];
	var formData = new FormData();
	var percent = 0;

	formData.append('photo', photo);

	xhr.upload.onprogress = function (e)
	{
		percent = e.loaded / e.total * 100;
		$('#profile_photo_progress').css('width', percent+'%');
	};
	$('#profile_photo_progress').parent().show();

	xhr.onload = xhr.onerror = function() {
    if (this.status == 200) {
      log(this.responseText);
			var j = $.parseJSON( this.responseText );
			if (j[0])
			{

				PhotoUploadSelect = j[3];
				// РѕС‚РєСЂС‹РІР°РµРј РѕРєРЅРѕ Рё РїРѕРјРµС‰Р°РµРј С‚СѓРґР° РѕР±СЂРµР·Р°РЅРЅСѓСЋ С„РѕС‚РєСѓ
				// РґР°РµРј РІРѕР·РјРѕР¶РЅРѕСЃС‚СЊ РІС‹Р±СЂР°С‚СЊ РѕР±СЂРµР·Р°С‚СЊ С„РѕС‚РєСѓ РґРѕ РјР°РєСЃРёРјР°Р»СЊРЅРѕ РґРѕРїСѓСЃС‚РёРјС‹С… СЂР°Р·РјРµСЂРѕРІ Рё СЌС‚Рѕ РєРІР°РґСЂР°С‚
				$('#profile_photo_original').parent().css({width: j[2].w+'px', height: j[2].h+'px'});
				$('#profile_photo_original').attr('src', j[1]).css({width: j[2].w+'px', height: j[2].h+'px'});
				$('#profile_photo_hash').val(j[4]);
				$('#profile_photo_original').Jcrop({minSize: [250, 250], maxSize: [450, 450], setSelect: j[3], aspectRatio: 1}, function () {
					PhotoUploadJCrop = this;
				});
				$('#profile_photo_crop').fadeIn(100);

				/*$('#profile_photo_nm').hide();
				$('#profile_photo_mini').attr('src', j[2]);*/
			}
			else
			{
				$('#photo_upload_error').text(j[1]).fadeIn(100);
			}

			$('#profile_photo_progress').parent().hide();
    } else {
      log("error " + this.status);
    }
  };

	xhr.open('POST', '/al/photo_upload.php', true);
	xhr.send(formData);
};
App.ProfilePhotoCrop = function ()
{

	$('#photo_crop_error').hide();

	$.ajax({
    type: 'POST',
    url: '/al/photo_crop.php',
    data: {action: 'crop_original', hash: $('#profile_photo_hash').val(), coords: PhotoUploadJCrop.tellSelect()}
  }).done(function( j ) {
    j = $.parseJSON(j);

    if ( j['success'] )
    {

			function showPreview (coords)
			{
				var rx = 150 / coords.w;
				var ry = 150 / coords.h;

				var rx2 = 70 / coords.w;
				var ry2 = 70 / coords.h;

				$('#photo_mini_preview').css({
					width: Math.round(rx * 250) + 'px',
					height: Math.round(ry * 250) + 'px',
					marginLeft: '-' + Math.round(rx * coords.x) + 'px',
					marginTop: '-' + Math.round(ry * coords.y) + 'px'
				});

				$('#photo_mini_preview2').css({
					width: Math.round(rx2 * 250) + 'px',
					height: Math.round(ry2 * 250) + 'px',
					marginLeft: '-' + Math.round(rx2 * coords.x) + 'px',
					marginTop: '-' + Math.round(ry2 * coords.y) + 'px'
				});
			}

			if (PhotoMiniJCrop)
			{
				PhotoMiniJCrop.destroy();
			}

			$('#photo_mini_preview, #photo_mini_preview2').attr('src', j['src_m']);
			$('#photo_mini_crop').parent().css({width: j['size_m'].w+'px', height: j['size_m'].h+'px'});
			$('#photo_mini_crop').attr('src', j['src_m']).css({width: j['size_m'].w+'px', height: j['size_m'].h+'px'});
			$('#photo_mini_crop').Jcrop({onChange: showPreview, onSelect: showPreview, minSize: [100, 100], maxSize: [200, 200], setSelect: [15, 15, 115, 115], aspectRatio: 1}, function () {
				PhotoMiniJCrop = this;
			});

			$('#profile_photo_cropper').hide();
			$('#profile_photo_mini').fadeIn(200, function () {
				$('#profile_step_next').text($('#profile_step_next').attr('data-text-save')).attr('onclick', 'App.ProfilePhotoSave();');
				$('#profile_step_back').show();
			});
    }

		if (j['error'])
		{
			$('#photo_crop_error').text(j['text']).fadeIn(100);
		}

  }).fail(function() {
    console.log('fail');
  });
};
App.ProfilePhotoSave = function ()
{
	$('#photo_crop_error').hide();

	$.ajax({
		type: 'POST',
		url: '/al/photo_crop.php',
		data: {action: 'crop_mini', hash: $('#profile_photo_hash').val(), coords: PhotoMiniJCrop.tellSelect()}
	}).done(function( j ) {
		j = $.parseJSON(j);

		if ( j['success'] )
		{
			$('#navbar_profile_photo').attr('src', j['m70']);


			$('#profile_photo_img').attr('src', j['m150']);
			$('#profile_photo_nm').hide();

			$('#profile_photo_crop').fadeOut(100);
			// Р·Р°РјРµРЅСЏРµРј С„РѕС‚РєРё, Р·Р°РєСЂС‹РІР°РµРј Рё РѕС‡РёС‰Р°РµРј РѕРєРЅРѕ.
			PhotoUploadJCrop.destroy();
			PhotoMiniJCrop.destroy();

			$('#photo_mini_crop').removeAttr( 'src' ).removeAttr( 'style' );
			$('#photo_mini_preview').removeAttr( 'src' ).removeAttr( 'style' );
			$('#photo_mini_preview2').removeAttr( 'src' ).removeAttr( 'style' );
			$('#profile_photo_hash').val( '' );
			$('#profile_step_next').text($('#profile_step_next').attr('data-text-continue')).attr('onclick', 'App.ProfilePhotoCrop();');
			$('#profile_step_back').hide();
			$('#profile_photo_cropper').show();
			$('#profile_photo_mini').hide();
		}

		if (j['error'])
		{
			$('#photo_crop_error').text(j['text']).fadeIn(100);
		}

		// СЃРґРµР»Р°С‚СЊ РѕР±СЂР°Р±РѕС‚С‡РёРє РѕС€РёР±РѕРє

	}).fail(function() {
		console.log('fail');
	});
};
App.ProfileStepBack = function ()
{
	PhotoUploadJCrop.release();
	PhotoUploadJCrop.setSelect(PhotoUploadSelect);

	$('#profile_photo_mini').hide();
	$('#profile_photo_cropper').fadeIn(200, function () {
		$('#profile_step_next').text($('#profile_step_next').attr('data-text-continue')).attr('onclick', 'App.ProfilePhotoCrop();');
		$('#profile_step_back').hide();
	});

};

App.makeKeyMap = function ( j )
{
	if ( j['success'] )
	{
		$('#make_map_success').html(j['text']).fadeIn(100);
	}
	else
	{
		$('#make_map_error').html(j['text']).fadeIn(100);
	}
};

App.changeWallets = function ( j )
{
	$('#change_ps_success').hide();
	$('#change_ps_error').hide();

	if (j['success'])
	{
		$('#km_token_payment').val('');
		$('#change_ps_km input').val('');
		$('#change_ps_km').slideUp(100);
		alertify.alert(j['alert_text'], "");
	}
	else if (j['errors'])
	{
		alertify.alert(j['errors'][0]['error_text'], "");
	}
};

App.changeWalletsKM = function ( j )
{
	$('#change_ps_success').hide();
	$('#change_ps_error').hide();

	if (j['make_token'])
	{
		$('#change_ps_success').html(j['text']).fadeIn(100);
		$('#km_token_payment').val(j['token']);
		$('#change_ps_km').slideDown(100);
	}
	else
	{
		if (j['logout'])
		{
			window.location.href="/logout.php";
		}

		if (j['clear_token'])
		{
			$('#km_token_payment').val('');
		}

		$('#change_ps_error').html(j['text']).fadeIn(100);
	}
};

App.keymapOffKM = function ( j )
{
	$('#change_ps_success').hide();
	$('#change_ps_error').hide();

	if (j['keymap_off'])
	{
		window.location.reload();
	}

	if (j['make_token'])
	{
		$('#change_ps_success').html(j['text']).fadeIn(100);
		$('#km_token_payment').val(j['token']);
		$('#change_ps_km').slideDown(100);
	}
	else
	{
		if (j['logout'])
		{
			window.location.href="/logout.php";
		}

		if (j['clear_token'])
		{
			$('#km_token_payment').val('');
		}

		$('#change_ps_error').html(j['text']).fadeIn(100);
	}
};

App.authorize = function ( j )
{
  if (j['success'])
  {
    $.cookie('bz_sid', j['cookie'], {
      expires : 365,
      path   : '/'
    });
    window.location.href = '/cabinet/';
  }
  if (j['errors'])
  {
		//grecaptcha.reset(recaptcha_auth);

		if (j['show_ga'])
		{
			$('#ga_code').show(0, function () { $(this).find('input[name="ga_code"]').focus(); });
		}

		if (j['text'])
		{
			$('#auhorize-form-error').html(j['text']).show();
		}

		if (j['errors'][0]['error'] === 4)
		{
			$('#auhorize-form-error').html('Р’Р°С€ Р°РєРєР°СѓРЅС‚ РІСЂРµРјРµРЅРЅРѕ Р·Р°РјРѕСЂРѕР¶РµРЅ.<br /> РћР±СЂР°С‚РёС‚РµСЃСЊ РІ С‚РµС…РЅРёС‡РµСЃРєСѓСЋ РїРѕРґРґРµСЂР¶РєСѓ.').show();
		}

		if (j['errors'][0]['error'] === 3)
		{
			$('#auhorize-form-error').html(__lang['logpass_incorrect']).show();
		}
		else if (j['errors'][0]['error'] === 10 || j['errors'][0]['error'] === 11)
		{
			$('#auhorize-form-error').html(__lang['code_invalid']).show();
		}
  }
};

App.register = function ( j )
{
  if (j['success'])
  {
    $.cookie('bz_sid', j['cookie'], {
      expires : 365,
      path   : '/'
    });
    $.cookie('bz_sid', j['cookie'], {
      expires : 365,
      path   : '/'
    });
    window.location.href = '/cabinet/';
  }
  if ( j['errors'] )
  {
		//grecaptcha.reset(recaptcha_reg);

		if (j['errors'][0]['error'] === 10 || j['errors'][0]['error'] === 11)
		{
			$('#register-form-error').html(__lang['code_invalid']).show();
		}
		else
		{
			for ( var k in j['errors'] )
			{
				if ( j['errors'][k]['error'] === 3 || j['errors'][k]['error'] === 4 || (j['errors'][k]['error'] === 2 && j['errors'][k]['type'] == 'password') )
				{
					$('#register-form-error').html( j['errors'][k]['error_text'] ).show();
				}
			}
		}
  }
};

App.restoreStart = function ( j )
{
	if (j['success'])
	{
		$('#restore_success_p').text(__lang['rst8']).show();
	}
	if (j['errors'])
	{
		//grecaptcha.reset(recaptcha_restore);

		if (j['errors'][0]['error'] == 1)
		{
			$('#restore_error_p').text(__lang['rst10']).show();
		}
		else if (j['errors'][0]['error'] == 2)
		{
			$('#restore_error_p').text(__lang['cabinet_alert4']).show();
		}
		else if (j['errors'][0]['error'] === 10 || j['errors'][0]['error'] === 11)
		{
			$('#restore_error_p').text(__lang['code_invalid']).show();
		}
	}
};

App.rChangePassword = function ( j )
{
	if (j['success'])
	{
		$('#restore_ch_success_p').text(__lang['rst9']).show();
		$('#restore_chb').attr('disabled', 'disabled');
	}
	if (j['errors'])
	{
		var t = '';
		if (j['errors'][0]['error'] === 6)
		{
			window.location.href = '/';
		}
		if (j['errors'][0]['error'] === 3)
		{
			t = __lang['rst12'];
		}
		if (j['errors'][0]['error'] === 2)
		{
			t = __lang['profile12']; // РµСЃС‚СЊ РІ Р±Р°Р·Рµ
		}
		if (j['errors'][0]['error'] === 1)
		{
			t = __lang['rst13'];
		}

		$('#restore_ch_error_p').text(t).show();
	}
};

App.loadUserInfo = function ( j )
{
  if ( j['success'] )
  {
    for ( var k in j['user_info'] )
    {
      $('#user-edit-'+k).val( j['user_info'][k] );
    }
    $('#user-control-header').html( 'РџРѕР»СЊР·РѕРІР°С‚РµР»СЊ: <strong>' + j['user_info']['login'] + '<strong>' );
		$('#user-log-transcation-table').html(j['log_info']);
    $('.user-edit-id').val( j['user_info']['id'] );
    $('.user-select-status').val( j['user_info']['career'] );
    $('#user-control').modal();
  }
};

App.userEdit = function ( j )
{
  if ( j['success'] )
  {
    for ( var k in j['user_info'] )
    {
      $('#user'+j['user_id']+'-'+k).text( j['user_info'][k] );
    }
  }
  if ( j['errors'] )
  {
    for (var k in j['errors'])
    {
      console.log('РћС€РёР±РєР°', j['errors'][k]['error'], ',', 'РўРёРї РїРѕР»СЏ', j['errors'][k]['type']);
    }
  }
};

App.searchUser = function ( val )
{

	$('.auto_pagination').attr('data-ajx-page', 1);

  $.ajax({
    type: 'POST',
    url: '/al/users.php',
    data: {text: val, action: 'search_user'}
  }).done(function( j ) {
    j = $.parseJSON(j);

    if ( j['success'] )
    {
      $('#user-search-box').html( j['table'] );
      $('.b-user-control').on('click', function () {
    		userControl(this);
    	});
    }

  }).fail(function() {
    console.log('fail');
  });
};

App.searchRW = function ( val, c )
{
  $.ajax({
    type: 'POST',
    url: '/al/refill.php',
    data: {text: val, action: 'search_'+c}
  }).done(function( j ) {
    j = $.parseJSON(j);

    if ( j['success'] )
    {
      $('#'+c+'-search-box').html( j['table'] );
      $('.b-accept-'+c).on('click', function () {
    		acceptRW(this, c);
    	});
    }

  }).fail(function() {
    console.log('fail');
  });
};

App.languageAdd = function ( j )
{
  console.log( j );
};

App.startRefill = function ( j )
{
  if (j['success'])
  {
		if (j['ps_id'] === 1)
		{
			$('#perfectmoney-amount').val(j['amount']);
			$('#perfectmoney-form-sci').submit();
		}
		else if (j['ps_id'] === 2)
		{
			$('#bz-bitcoin--qr').attr('src', j['qr']);
			$('#bz-bitcoin--get').text(j['get']);
			$('#bz-bitcoin--address').text(j['address']);
			$('#bz-bitcoin--btc_amount').text(j['btc_amount']);
			$('#bz-bitcoin--rate').text(j['rate']);
			$('#bitcoin-refill-popup').fadeIn(100);
		}
		else if (j['ps_id'] === 3)
		{
			$('#advcash-order-id').val(j['ac_order_id']);
			$('#advcash-sign').val(j['ac_sign']);
			$('#advcash-ps-id').val(j['ps_id']);
			$('#advcash-ac-ps').val(j['ps_name']);
			$('#advcash-amount').val(j['amount']);
			$('#advcash-form-sci').submit();
		}
		else if (j['ps_id'] === 4)
		{
			$('#payeer-order-id').val(j['orderid']);
			$('#payeer-sign').val(j['sign']);
			$('#payeer-desc').val(j['desc']);
			$('#payeer-params').val(j['params']);
			$('#payeer-amount').val(j['amount']);
			$('#payeer-form-sci').submit();
		}
		else if (j['ps_id'] === 5 || j['ps_id'] === 6)
		{
			window.location.href = j['url'];
		}
	}
  else if (j['errors'])
  {
    alertify.alert(j['errors'][0]['error_text'], "");
  }
};

App.withdrawAdd = function ( j )
{
  if (j['success'])
  {
    alertify.alert(j['alert_text'], "");
    $('#reinvest-amount').val('');
    $('#withdraw-table').append('<tr><td>'+j['table']['sum']+'</td><td>'+j['table']['payment']+'</td><td>'+j['table']['req']+'</td><td>'+j['table']['date']+'</td><td></td><td><label class="label label-warning">'+j['table']['pay_text']+'</label></td></tr>');
  }
  else if (j['errors'])
  {
    alertify.alert(j['errors'][0]['error_text'], "");
  }
};

App.withdrawPercent = function ( j )
{
  if (j['success'])
  {
    window.location.reload();
  }
};

App.addProfit = function ( j )
{
	if (j['success'])
	{
		alert('РџСЂРѕС†РµРЅС‚ РЅР°С‡РёСЃР»РµРЅ!');
	}
};

App.alertifyShow = function ( j )
{
  if (j['success'])
  {
    alertify.alert(j['alert_text'], "");
  }
  else if (j['errors'])
  {
    alertify.alert(j['errors'][0]['error_text'], "");
  }
};

App.readAlerts = function ()
{
  $.ajax({
    type: 'POST',
    url: '/al/cabinet.php',
    data: {action: 'read_alerts'}
  }).done(function( j ) {
    j = $.parseJSON(j);

    if ( j[0] )
    {
      $('#read-alerts').attr('onclick', '');
			$('#alerts_counter').fadeOut(600);
    }

  }).fail(function() {
    console.log('fail');
  });
};

App.makeDeposit = function ( j )
{
  if (j['success'] || j['error_alert'])
  {
    alertify.alert(j['alert_text'], "");
  }
  else if (j['errors'])
  {
    alertify.alert(j['errors'][0]['error_text'], "");
  }
};

App.openReferral = function (rid, mode, filter)
{
	var rob = $('#referral-button-'+rid);

	if (rob.attr('data-loading') == 'true')
	{
		return;
	}

	if (rob.attr('data-loaded') == 'true')
	{
		rob.removeAttr('data-loaded').html('+');
		$('#referral-open-box-'+rid).fadeOut(200, function () {
			$(this).html('');
		});
		return;
	}

	rob.html('<i class="fa fa-spinner fa-spin"></i>').attr('data-loading', true);

	$.ajax({
    type: 'POST',
    url: '/al/cabinet.php',
    data: {rid: rid, action: 'open_referral', filter: filter}
  }).done(function( j ) {
    j = $.parseJSON(j);

		rob.removeAttr('data-loading');

    if ( j['success'] )
    {
			rob.html('-').attr('data-loaded', true);
			var html = mode === 1 ? '<td colspan="8" style="padding: 0; padding-left: 18px; padding-bottom: 10px;">'+j['html']+'</td>' : j['html'];
			$('#referral-open-box-'+rid).hide().html(html).fadeIn(300);
    }
		else
		{
			rob.html('+');
		}

  }).fail(function() {
    console.log('fail');
  });
};

App.pageReferral = function (rid, page, mode, filter)
{
	var id = mode === 1 ? 'referral-prev-page' : 'referral-next-page';
	var rob = $('#'+id+rid);

	if (rob.attr('data-loading') == 'true')
	{
		return;
	}

	rob.html('<i class="fa fa-spinner fa-spin"></i>').attr('data-loading', true);

	$.ajax({
    type: 'POST',
    url: '/al/cabinet.php',
    data: {rid: rid, page: page, filter: filter, action: 'open_referral'}
  }).done(function( j ) {
    j = $.parseJSON(j);

		rob.removeAttr('data-loading');

    if ( j['success'] )
    {
			var html = j['level'] === 1 ? '<td colspan="8" style="padding: 0; padding-left: 18px; padding-bottom: 10px;">'+j['html']+'</td>' : j['html'];
			$('#referral-open-box-'+rid).html(html);
    }

  }).fail(function() {
    console.log('fail');
  });
};

App.aboutReferral = function (rid)
{
	$.ajax({
		type: 'POST',
		url: '/al/cabinet.php',
		data: {rid: rid, action: 'about_referral'}
	}).done(function( j ) {
		j = $.parseJSON(j);

		if ( j['success'] )
		{
			// Р·Р°РїРёС€РµРј РґР°РЅРЅС‹Рµ
			for (var k in j['data'])
			{
				$('#bz-about-'+k).text(j['data'][k]);
			}

			$('#bz-about-av').css({'background-image': 'url('+j['data']['avatar']+')', 'background-size': '100%'}).text(j['data']['first_fn']);
			// РїРѕРєР°Р¶РµРј РґР°РЅРЅС‹Рµ
			$('#about-referral').fadeIn(100);
		}

	}).fail(function() {
		console.log('fail');
	});
};

$(function () {

	if ($('.forexmarket-select').length > 0)
	{
		$('.forexmarket-select').niceSelect();
	}

	if ($('.box-rate .rate-form .r-form-group .f-input').length > 0)
	{
		$('.box-rate .rate-form .r-form-group .f-input').mask('000 000 000.00$', {reverse: true});
		$('.box-rate .rate-cont .lg-title input').mask('000 000 000.00$', {reverse: true});
	}

	$('.messages-form-send').off('submit');

  $('.box-rate .rate-cform').off('submit').on('submit', function (ev) {

    var _sum = $(this).find('input[name=deposit_sum]');
    var $form = $(this);

    if (_sum.val().length === 0)
    {
      _sum.focus();
      ev.preventDefault();
      return;
    }

    // @TRANSLATE

    alertify.confirm(bz_language.alert_mk_deposit.replace('_sum_', _sum.val()), '',function () {

        $.ajax({
          type: $form.attr('method'),
          url: $form.attr('action'),
          data: $form.serialize()+'&ajax=1'
        }).done(function(msg) {

          msg = $.parseJSON(msg);

          App.makeDeposit( msg );

        }).fail(function() {
              console.log('fail');
        });

      }, function () {}
    ).setting('labels',{'ok':bz_language.alert_yes, 'cancel': bz_language.alert_cancel});

    ev.preventDefault();
  });

	$('.box-rate .product-cform').off('submit').on('submit', function (ev) {

    var prod = $(this).find('select[name=product]');
    var $form = $(this);

    if (prod.val().length === 0)
    {
      prod.focus();
      ev.preventDefault();
      return;
    }

    // @TRANSLATE

		var products = {
			1: 'ANDROMEDA TS',
			2: 'ANDROMEDA BOT'
		};

		alertify.prompt( bz_language.alert_buy_robot.replace('_robot_', products[prod.val()]), bz_language.alert_number, '', function(evt, value) {
			$('#buy-product-number').val(value);

			$.ajax({
				type: $form.attr('method'),
				url: $form.attr('action'),
				data: $form.serialize()+'&ajax=1'
			}).done(function(msg) {

				msg = $.parseJSON(msg);

				if (msg['alert_text'])
				{
					alertify.alert(msg['alert_text'], "");
				}

			}).fail(function() {
						console.log('fail');
			});

		}, function() {}).setting('labels',{'ok':bz_language.alert_buy, 'cancel': bz_language.alert_cancel});

    ev.preventDefault();
  });

	$('.box-rate .g-product-cform').off('submit').on('submit', function (ev) {

		var prod = $(this).find('select[name=product]');
		var $form = $(this);

		if (prod.val().length === 0)
		{
			prod.focus();
			ev.preventDefault();
			return;
		}

		// @TRANSLATE

		var products = {
			1: 'ANDROMEDA TS',
			2: 'ANDROMEDA BOT'
		};

		alertify.prompt( bz_language.alert_get_robot.replace('_robot_', products[prod.val()]), bz_language.alert_number, '', function(evt, value) {
			$('#get-product-number').val(value);

			$.ajax({
				type: $form.attr('method'),
				url: $form.attr('action'),
				data: $form.serialize()+'&ajax=1'
			}).done(function(msg) {

				msg = $.parseJSON(msg);

				if (msg['alert_text'])
				{
					alertify.alert(msg['alert_text'], "");
				}

			}).fail(function() {
						console.log('fail');
			});

		}, function() {}).setting('labels',{'ok':bz_language.alert_get, 'cancel': bz_language.alert_cancel});

		ev.preventDefault();
	});

  var crypto_rates = {
    standart: {daily: 0.5, monthly: 15},
    ultra: {daily: 0.7, monthly: 21},
    ultimate: {daily: 0.9, monthly: 27}
  };

  // $('.box-rate .rate-cont .lg-title input.crypto-calc').on('keyup', function ( ev ) {
  //   var val = parseFloat($(this).val().split(' ').join(''));
  //   var rate = $(this).attr('data-rate');

  //   $('#js-'+rate+'-daily').html( number_format( (val/100*crypto_rates[rate]['daily']), 2, '.', ' ' ) + '$' );
  //   $('#js-'+rate+'-monthly').html( number_format( (val/100*crypto_rates[rate]['monthly']), 2, '.', ' ' ) + '$' );
  // });

  var elem_standart = document.getElementById('js-standart-decimal');

  if ( elem_standart )
  {

    var js_standart = new Powerange(elem_standart, {
      callback: function() {
        var val = parseFloat(elem_standart.value);

        $('#js-standart-inv').val( number_format( val, 2, '.', ' ' ) +'$');
        $('#js-standart-daily').html( number_format( (val/100*0.5), 2, '.', ' ' ) + '$' );
        $('#js-standart-monthly').html( number_format( (val/100*15), 2, '.', ' ' ) + '$' );
      },
      decimal: true,
      min: 25,
      max: 10000,
      hideRange: true
    });

    var elem_ultra = document.getElementById('js-ultra-decimal');
    var js_ultra = new Powerange(elem_ultra, {
      callback: function() {
        var val = parseFloat(elem_ultra.value);

        $('#js-ultra-inv').val( number_format( val, 2, '.', ' ' ) +'$');
        $('#js-ultra-daily').html( number_format( (val/100*0.7), 2, '.', ' ' ) + '$' );
        $('#js-ultra-monthly').html( number_format( (val/100*21), 2, '.', ' ' ) + '$' );
      },
      decimal: true,
      min: 3000,
      max: 10000,
      hideRange: true
    });

    var elem_ultimate = document.getElementById('js-ultimate-decimal');
    var js_ultimate = new Powerange(elem_ultimate, {
      callback: function() {
        var val = parseFloat(elem_ultimate.value);

        $('#js-ultimate-inv').val( number_format( val, 2, '.', ' ' ) +'$');
        $('#js-ultimate-daily').html( number_format( (val/100*0.9), 2, '.', ' ' ) + '$' );
        $('#js-ultimate-monthly').html( number_format( (val/100*27), 2, '.', ' ' ) + '$' );
      },
      decimal: true,
      min: 10000,
      max: 30000,
      hideRange: true
    });

  }

  var elem_handtrade = document.getElementById('js-handtrade-decimal');

  if (elem_handtrade)
  {

    var js_handtrade = new Powerange(elem_handtrade, {
      callback: function() {
        var val = parseFloat(elem_handtrade.value);

        $('#js-handtrade-input').val( number_format( val, 2, '.', ' ' ) +'$' );
      },
      decimal: true,
      min: 25,
      max: 10000,
      hideRange: true
    });

    var elem_robotrade = document.getElementById('js-robotrade-decimal');
    var js_ultra = new Powerange(elem_robotrade, {
      callback: function() {
        var val = parseFloat(elem_robotrade.value);

        $('#js-robotrade-input').val( number_format( val, 2, '.', ' ' ) +'$' );
      },
      decimal: true,
      min: 25,
      max: 10000,
      hideRange: true
    });

  }

	$('.off_all_submit').off('submit');

	changeWidthIndex();
	transcationsScroll();

	$('.bz-modal-close').click(function () {
		$( $(this).attr('data-id') ).fadeOut(100);
	});

	$("#i_phone").intlTelInput();
	$("#inp_phone").intlTelInput();

	//

	$('#ip_protection_on').on('ifChecked', function () {
		//$('#ip_protection_block').slideDown(100);
		setProtectionIP(1);
	});
	$('#ip_protection_on').on('ifUnchecked', function () {
		//$('#ip_protection_block').slideUp(100);
		setProtectionIP(0);
	});

	$('#code_card_on').on('ifChecked', function () {
		//$('#ip_protection_block').slideDown(100);
		setCodeCard(1);
	});
	$('#code_card_on').on('ifUnchecked', function () {
		//$('#ip_protection_block').slideUp(100);
		setCodeCard(0);
	});

	$('#ga_secret_on').on('ifChecked', function () {
		//$('#ip_protection_block').slideDown(100);
		setGaSecret(1);
	});
	$('#ga_secret_on').on('ifUnchecked', function () {
		//$('#ip_protection_block').slideUp(100);
		setGaSecret(0);
	});

	$('#gae_on').on('ifChecked', function () {
		//$('#ip_protection_block').slideDown(100);
		setGae(1);
	});
	$('#gae_on').on('ifUnchecked', function () {
		//$('#ip_protection_block').slideUp(100);
		setGae(0);
	});

});

function setProtectionIP (mode)
{
	$.ajax({
		type: 'POST',
		url: '/al/cabinet.php',
		data: {mode: mode, action: 'ip_protection_set'}
	}).done(function( j ) {
		j = $.parseJSON(j);

		if (j['text'])
		{
			var color = 'red';
			if (mode === 1) color = 'green';
			$('#ip_protection_label').text(j['text']).css('color', color);
		}

	}).fail(function() {
		console.log('fail');
	});
}

function setCodeCard (mode)
{
	if (mode === 1) {
				// РїРѕРєР°Р·С‹РІР°РµРј РѕРєРЅРѕ СЃ РёРЅСЃС‚СЂСѓРєС†РёРµР№ РїРѕ СѓСЃС‚Р°РЅРѕРІРєРµ Рё РїРѕРєР»СЋС‡РµРЅРёСЋ
		$.ajax({
			type: 'POST',
			url: '/al/cabinet.php',
			data: {mode: mode, action: 'start_codecard'}
		}).done(function( j ) {
			j = $.parseJSON(j);

			if (j['success'])
			{
				$('#codecard_error').hide();

				// РІС‹РІРµРґРµРј qr Рё РїРѕР»Рµ РґР»СЏ РІРІРѕРґР° РєРѕРґР°
				$('#codecard-token').val(j['token']);
				$('#km_password10').attr('placeholder', j['text']);
				$('#codecard-popup').fadeIn(100);

			}

		}).fail(function() {
			console.log('fail');
		});
	}
	if (mode === 0) {
		// РїРѕРєР°Р·С‹РІР°РµРј РѕРєРЅРѕ РґР»СЏ РІРІРѕРґР° РІСЂРµРјРµРЅРЅРѕРіРѕ РєРѕРґР°.
		// РµСЃР»Рё РєРѕРґ РѕРє - РѕС‚РєР»СЋС‡Р°РµРј РєРѕРґ
		$.ajax({
			type: 'POST',
			url: '/al/cabinet.php',
			data: {mode: mode, action: 'start_codecard_d'}
		}).done(function( j ) {
			j = $.parseJSON(j);

			if (j['success'])
			{
				$('#codecard_d_error').hide();

				// РІС‹РІРµРґРµРј qr Рё РїРѕР»Рµ РґР»СЏ РІРІРѕРґР° РєРѕРґР°
				$('#codecard_d_text').html(j['text2']);
				$('#codecard-d-token').val(j['token']);
				$('#km_password11').attr('placeholder', j['text']);
				$('#codecard-d-popup').fadeIn(100);

			}

		}).fail(function() {
			console.log('fail');
		});
	}
}

App.endCodeCard = function (j)
{
	$('#codecard_error').hide();

	if (j['error'])
	{
		$('#codecard_error').html(j['text']).show();
		// РїРѕРєР°Р·С‹РІР°РµРј РѕС€РёР±РєСѓ
	}

	if (j['logout'])
	{
		setTimeout(function () {
			window.location.reload();
		}, 5000);
	}

	if (j['end_codecard'])
	{
		$('#codecard-popup').fadeOut(100);
		$('#code_card_label').text(j['text']).css('color', 'green');
	}
};

App.endCodeCardD = function (j)
{
	$('#codecard_d_error').hide();

	if (j['error'])
	{
		$('#codecard_d_error').html(j['text']).show();
		// РїРѕРєР°Р·С‹РІР°РµРј РѕС€РёР±РєСѓ
	}

	if (j['logout'])
	{
		setTimeout(function () {
			window.location.reload();
		}, 5000);
	}

	if (j['end_codecard'])
	{
		$('#codecard-d-popup').fadeOut(100);
		$('#code_card_label').text(j['text']).css('color', 'red');
	}
};

App.gaSecretDSet = function (j)
{
	$('#bz-ga-d-error').hide();

	if (j['error'])
	{
		$('#bz-ga-d-error').text(j['error']).fadeIn(100);
	}

	if (j['success'])
	{
		$('#ga_secret_label').text(j['text']).css('color', 'red');
		$('#code_card_on').removeAttr('disabled');
		$('#ga-auth-d-popup').fadeOut(100);
	}
}

App.gaSecretSet = function (j)
{
	$('#bz-ga-error').hide();

	if (j['error'])
	{
		$('#bz-ga-error').text(j['error']).fadeIn(100);
	}

	if (j['success'])
	{
		$('#ga_secret_label').text(j['text']).css('color', 'green');
		$('#code_card_on').attr('disabled', 'true');
		$('#ga_entry1').show();
		$('#ga-auth-popup').fadeOut(100);
	}
}

function setGaSecret (mode)
{
	if (mode === 1) {
				// РїРѕРєР°Р·С‹РІР°РµРј РѕРєРЅРѕ СЃ РёРЅСЃС‚СЂСѓРєС†РёРµР№ РїРѕ СѓСЃС‚Р°РЅРѕРІРєРµ Рё РїРѕРєР»СЋС‡РµРЅРёСЋ
		$.ajax({
			type: 'POST',
			url: '/al/cabinet.php',
			data: {mode: mode, action: 'ga_auth_start'}
		}).done(function( j ) {
			j = $.parseJSON(j);

			if (j['success'])
			{

				// РІС‹РІРµРґРµРј qr Рё РїРѕР»Рµ РґР»СЏ РІРІРѕРґР° РєРѕРґР°
				$('#bz-ga--qr').attr('src', j['qr']);

				$('#ga-auth-popup').fadeIn(100);
			}

		}).fail(function() {
			console.log('fail');
		});
	}
	if (mode === 0) {
		// РїРѕРєР°Р·С‹РІР°РµРј РѕРєРЅРѕ РґР»СЏ РІРІРѕРґР° РІСЂРµРјРµРЅРЅРѕРіРѕ РєРѕРґР°.
		// РµСЃР»Рё РєРѕРґ РѕРє - РѕС‚РєР»СЋС‡Р°РµРј РєРѕРґ
		$('#ga-auth-d-popup').fadeIn(100);
	}
}

function setGae (mode)
{
	$.ajax({
		type: 'POST',
		url: '/al/cabinet.php',
		data: {mode: mode, action: 'gae_set'}
	}).done(function( j ) {
		j = $.parseJSON(j);

		if (j['text'])
		{
			var color = 'red';
			if (mode === 1) color = 'green';
			$('#gae_on_label').text(j['text']).css('color', color);
		}

	}).fail(function() {
		console.log('fail');
	});
}

function changeWidthIndex ()
{
	var th_deps  = $('#deposits-table-fix tr th');

	if (th_deps.length === 0) return;

	var th_trans = $('#transactions-table-fix tr th');
	var scrollbar  = 0;

	scrollbar = $('#transactions-table').outerWidth() - $('#transactions-table-fix').outerWidth();
	th_trans.eq(0).css('width', th_deps.eq(0).outerWidth()+'px');
	th_trans.eq(-1).css('width', th_deps.eq(-1).outerWidth()+'px');
	th_trans.eq(-2).css('width', th_deps.eq(-2).outerWidth()-scrollbar+'px');

	var full_width = 0;

	th_deps.each(function (i) {
		full_width += $(this).outerWidth();
	});

	full_width = full_width - th_deps.eq(0).outerWidth() - th_deps.eq(-1).outerWidth() - th_deps.eq(-2).outerWidth();

	th_trans.eq(1).css('width', full_width+'px');

	//console.log('table th width:', full_width);
}

function changeForexMarket ( val )
{
	var price = 100;
	if (val == 2) price = 5000;

	$('#products-price').text( price+'$' );
};

var transcationsStartPoint = 30;
var transcationsLoad = false;

function transcationsScroll ()
{
	$('#transaction-scroll').scroll(function (e) {
		var h = $('#transactions-table-fix').height() - $('#transaction-scroll').scrollTop();
		if (h < 800 && transcationsLoad === false)
		{
			transcationsLoad = true;
			$.ajax({
				type: 'POST',
				url: '/al/cabinet.php',
				data: {start: transcationsStartPoint, action: 'load_transactions_more'}
			}).done(function( j ) {
				j = $.parseJSON(j);

				if (j['success'])
				{
					//$('#transactions-table-body').append(j['html']);
					$('#transactions-table-body')[0].innerHTML += j['html'];
					transcationsStartPoint += 30;
					transcationsLoad = false;
				}
				else
				{
					transcationsLoad = true;
				}

			}).fail(function() {
				console.log('fail');
			});
		}
	});
};

/* UPDATE */
  $(document).ready(function(){
    $('#js-toggle').on('click', function (){
      if ($(this).hasClass('on')) {
        $('.side-menu').css('width', '70px');
        $('.right').css('left', '70px');
        $(this).find('i').removeClass('fa-ellipsis-h').addClass('fa-ellipsis-v');
        $('#sidebar-menu').addClass('small-menu').removeClass('big-menu');
      }
      else{
        $('.side-menu').css('width', '225px');
        $('.right').css('left', '225px');
        $(this).find('i').removeClass('fa-ellipsis-v').addClass('fa-ellipsis-h');
        $('#sidebar-menu').addClass('big-menu').removeClass('small-menu');
      }
      $(this).toggleClass('on');
    })
  })
/* END UPDATE */