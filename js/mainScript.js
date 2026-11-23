// JavaScript Document
function loadSearchForm()
{
	
	$('#searchForm').toggleClass('showForm');
}///ended
function hideForm()
{
$('#searchForm').removeClass('showForm');
}//////ended
function hideEmailForm()
{
$('#emailForm').removeClass('showForm');
}/////ended



//////////////
function forgotPassword()
{
	$('#forgotpwd').toggleClass('showFormforgotpwd');
}//////////////////ended
$(document).ready(function(){
	
	
	
	
	
var width=$(window).width();
if(width<700)
{

	$('#askanssection').removeClass('sec-padd');
}
////////////////accordion for ask and solve
$('#accordions').accordion({collapsible:true,collapsed:true});
/////////////////////////
//////////togglemenu of notification container
$('.userAreaIcon > .menuUserDiv').each(function(){
	$(this).on('click',function(){
		$('#userLatestDataContainer').toggleClass('ShowLatestDataContainer');
		});
	});
	
	//////////////////////////method each ended
	//////////codes for the button click of the register page
	$('#seekerform').hide();
	$('#hirerform').hide();
	//$('#normaluserform').show();
	$('#seeker').on('click',function(){
		$('#seekerform').slideToggle(400);
		$(this).delay(200);
		$('#hirerform').slideUp(400);
		$('#normaluserform').slideUp(400);
		});////////////onclick finished of seeker
		$('#hirer').on('click',function(){
		$('#hirerform').slideToggle(400);
		$(this).delay(200)
		$('#seekerform').slideUp(400);
		$('#normaluserform').slideUp(400);
		});////////////onclick finished of seeker
		$('#normaluser').on('click',function(){
		$('#normaluserform').slideToggle(400);
		$(this).delay(200)
		$('#seekerform').slideUp(400);
		$('#hirerform').slideUp(400);
		});////////////onclick finished of normaluser
		
		$('#detailspageaccordion').accordion({collapsible:true,active:4,heightStyle: "content"});
		
		//////////////////////
		////////codes for preview image uplloaded
		$("#upoadprofile").change(function() {
			
  readURL(this);
});
////////////////codes for date and time in diary page
	dateandtimefordiary('editor');
	dateandtimefordiary('timeanddate');

});//////////document ready ended


function showMenuToDelete(id)
{
$("#"+id).toggleClass('shownotifiDeleteMark');	
}//////ended
///////////
function newItems(id)
{
$('#'+id).toggleClass('ShowLatestDataContainer');	
$('#leftMenu').toggleClass('changePosition');
}/////////ended
////////////accordion for details page
///function for preview image
function readURL(input) {
  if (input.files && input.files[0]) {
    var reader = new FileReader();
    reader.onload = function(e) {
		$('#uploadpreview').removeAttr('style');
      $('#uploadpreview').attr('src', e.target.result);
    }

    reader.readAsDataURL(input.files[0]);
  }
}
//////function to verify password and email with confirmed another
function verifyEmailPassword(firstid,secondid,btnid,msgel)
{
	///alert('hi there');
var f=$('#'+firstid).val();
var s=$('#'+secondid).val();
////alert(f+ ' hi there '+s);
if(f.length<8)
{
$('#'+msgel).text('minimum 8 character needed ').css('color','black');	
$('#'+btnid).attr('disabled','true');
}
if(f.length>=8)
{
if(f==s)
{
$('#'+btnid).removeAttr('disabled');
$('#'+msgel).text('ok').css('color','green');	
}
else
{
$('#'+btnid).attr('disabled','true');	
$('#'+msgel).text('didnot match').css('color','red');
}	
}
}
//////////
/////////////codes for add fields in skills

 ///////////saveskill function starts here
 function saveSkill()
 {
var skillname=$('#skillname').val(); 
var skillpercent=$('#skillpercent').val(); 
alert(skillname+' '+skillpercent);
if(skillpercent!=undefined && skillname!=undefined)
{
	$.ajax({
		data:'skillname='+skillname+'&skillperccent='+skillpercent,
		url:"#",
		success: function(result)
		{
			alert("done");
			}
		
		});
	
}
	 
}

/////////////////////////function for dateand time of diary
function dateandtimefordiary(id)
{
var date=new Date();
var year=date.getFullYear();
var monthdate=date.getDate();
var day=date.getDay();
var month=date.getMonth();
var hours=date.getHours();
var minutes=date.getMinutes();
var timeidentify='';
var monthname='';
var dayname='';
////////month set started
if(month==0)
{
monthname='January';	
}
else if(month==1)
{
monthname='February';	
}
else if(month==2)
{
monthname='March';	
}
else if(month==3)
{
monthname='April';	
}
else if(month==4)
{
monthname='May';	
}
else if(month==5)
{
monthname='June';	
}
else if(month==6)
{
monthname='July';	
}
else if(month==7)
{
monthname='August';	
}
else if(month==8)
{
monthname='September';	
}
else if(month==9)
{
monthname='October';	
}
else if(month==10)
{
monthname='November';	
}
else if(month==11)
{
monthname='December';	
}

////////////month set finished
/////////day set started
if(day==0)
{
dayname='Sunday';	
}
else if(day==1)
{
dayname='Monday';	
}
else if(day==2)
{
dayname='Tuesday';	
}
else if(day==3)
{
dayname='Wednesday';	
}
else if(day==4)
{
dayname='Thursday';	
}
else if(day==5)
{
dayname='Friday';	
}
else if(day==6)
{
dayname='Saturday';	
}////day set ended
///////////codes for time setup

if(hours<12)
{
timeidentify='AM';
hours=hours;	
}
else if(hours>12 && hours<24){
	timeidentify='PM';
hours=hours-12;	

	}
	else if(hours==12)
	{
		timeidentify='PM';
hours=hours;		
	}

//var time=date.Hours();
var diarydate=date.getDate()+' '+ monthname.substr(0,3)+' , '+date.getFullYear();
var fulltime=hours+' : '+minutes+ ' '+timeidentify;
var display='<h1>'+diarydate+'<br/>'+dayname+' <br/>'+fulltime+'</h1>';
$('#'+id).html(display);	
	
	
	$('#diarydate').val(diarydate);
	$('#diaryday').val(dayname);
	$('#diarytime').val(fulltime);
}