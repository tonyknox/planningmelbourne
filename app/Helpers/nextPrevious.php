<?php

function nextBook($mdl,$fld,$fldval,$relatedfld,$rfval){
	if(preg_match('/Akimage/', $mdl) || preg_match('/Chapter/', $mdl)){ 
		$chapter = $mdl::distinct($relatedfld)->get([$relatedfld])->pluck($relatedfld);
		$pos = $chapter->search($rfval);

		list($prev,$next) = nextPrevious($pos,$chapter);

		$p = $mdl::where($relatedfld,$prev)->first();
		$p = $p->$fld;
		$n = $mdl::where($relatedfld,$next)->first();
		$n = $n->$fld;

	}
	else{
		$chapter = $mdl::distinct()->where($relatedfld, $rfval)->orderBy($fld)->get([$fld])->pluck($fld);
		$pos = $chapter->search($fldval);	

		list($prev,$next) = nextPrevious($pos,$chapter);	

		$p = $mdl::where($fld,$prev)->first();
		$n = $mdl::where($fld,$next)->first();
	}
	return [$p,$n];
}

function nextChapter($mdl,$fld,$fldval,$id ){

	if(empty($id)){$id = $fld;}
	
	$bk = $mdl::distinct()->orderBy($id)->get([$fld])->pluck($fld);
	$pos = $bk->search($fldval);

	list($prev,$next) = nextPrevious($pos,$bk);

	$prev = $mdl::where($fld,$prev)->first();
	$prev = $prev->$fld;
	$next = $mdl::where($fld,$next)->first();
	$next = $next->$fld;

	return [$prev,$next];
}

// function nxtPge($mdl,$fld,$fldval){

// 	$page = $mdl::orderBy($fld)->select($fld)->get()->pluck($fld);
// 	$pos = $page->search($fldval);

// 	list($prevName,$nextName) = nextPrevious($pos,$page);
	
//    	return [$prevName,$nextName];
// }

function nextPrevious($pos,$chapter){

	$prev = $chapter[$pos];
	$next = $chapter[$pos];

	if($pos>0){ 
	    $prev = $chapter[$pos-1];
	}
	if($pos<=count($chapter)-2){
	    $next = $chapter[$pos+1];
	}	

	return [$prev,$next];
}