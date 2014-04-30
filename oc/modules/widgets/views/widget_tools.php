<?php defined('SYSPATH') or die('No direct script access.');?>

<?if($widget->ad != FALSE):?>
<div>			
	<a class="btn btn-primary" style=" width: 100%; " width="100%" type="button" href="<?=Route::url('default', array('action'=>'to_top','controller'=>'ad','id'=>$widget->ad->id_ad))?>"><?=__('Go Top!')?></a>
	<a class="btn btn-primary" style=" width: 100%; " type="button" href="<?=Route::url('default', array('action'=>'to_featured','controller'=>'ad','id'=>$widget->ad->id_ad))?>"><?=__('Go Featured!')?></a>
	
	<a class="btn btn-primary" style=" width: 100%; " href="<?=Route::url('oc-panel', array('controller'=>'profile','action'=>'update','id'=>$widget->ad->id_ad))?>"><i class="glyphicon glyphicon-edit"></i> <?=__("Edit");?></a> 
    <a class="btn btn-primary" style=" width: 100%; " href="<?=Route::url('oc-panel', array('controller'=>'ad','action'=>'deactivate','id'=>$widget->ad->id_ad))?>" 
        onclick="return confirm('<?=__('Deactivate?')?>');"><i class="glyphicon glyphicon-off"></i><?=__("Deactivate");?>
    </a> 
    
    <?if(Auth::instance()->logged_in() AND Auth::instance()->get_user()->id_role == Model_Role::ROLE_ADMIN):?>
    <a class="btn btn-primary" style=" width: 100%; " href="<?=Route::url('oc-panel', array('controller'=>'ad','action'=>'spam','id'=>$widget->ad->id_ad))?>" 
        onclick="return confirm('<?=__('Spam?')?>');"><i class="glyphicon glyphicon-fire"></i><?=__("Spam");?>
    </a> 
    <a class="btn btn-primary" style=" width: 100%; " href="<?=Route::url('oc-panel', array('controller'=>'ad','action'=>'delete','id'=>$widget->ad->id_ad))?>" 
        onclick="return confirm('<?=__('Delete?')?>');"><i class="glyphicon glyphicon-remove"></i><?=__("Delete");?>
    </a>
    <?endif?>
</div>
<hr>

<ul>
	<?foreach($widget->user_ads as $ads):?>
		<li>
			<a title="<?=$ads->title;?>" alt="<?=$ads->title;?>" href="<?=Route::url('ad', array('controller'=>'ad','category'=>$ads->category->seoname,'seotitle'=>$ads->seotitle))?>">
			<?=$ads->title;?>
			</a>
		</li>
	<?endforeach?>
</ul>
<?endif?>