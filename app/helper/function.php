<?php


function ShowErrors($errors, $nameinput){

	if($errors->has($nameinput))
	{
        echo '<div class="alert alert-danger" ><strong>';

        echo $errors->first($nameinput);

        echo "</strong></div>";

    }
}

function getCategory($danhMuc, $idCha, $chuoiTab){
	foreach($danhMuc as $banGhi){
		if($banGhi['parent']==$idCha){
			echo '<option value = "'.$banGhi['id'].'">'.$chuoiTab.$banGhi['name'].'</option>';
			getCategory($danhMuc, $banGhi['id'], $chuoiTab.'---|');
		}
	}
}

function getCategoryEdit($danhMuc, $idCha, $chuoiTab, $idSelect){
	foreach($danhMuc as $banGhi){
		if($banGhi['parent']==$idCha){

			if ($banGhi['id']== $idSelect)
			{
				echo '<option selected value = "'.$banGhi['id'].'">'.$chuoiTab.$banGhi['name'].'</option>';
			}else{
				echo '<option value = "'.$banGhi['id'].'">'.$chuoiTab.$banGhi['name'].'</option>';

			}
			getCategory($danhMuc, $banGhi['id'], $chuoiTab.'---|');
		}
	}
}

function showCategory($danhMuc, $idCha, $chuoiTab){
	foreach($danhMuc as $banGhi){
		if($banGhi['parent']==$idCha){
			echo'<div class="item-menu"><span>'.$chuoiTab.$banGhi['name'].'</span>
					<div class="category-fix">
						<a class="btn-category btn-primary" href="'.url('/').'admin/category/'.$banGhi['id'].'/edit'.'"><i class="fa fa-edit"></i></a>
						<a class="btn-category btn-danger" href="'.url('/').'admin/category/del/'.$banGhi['id'].'"><i class="fa fa-close"></i></a>

					</div>
				</div>';
			showCategory($danhMuc, $banGhi['id'], $chuoiTab.'---|');
		}
	}
}


function getLevel($danhMuc, $idCha, $cap){
	foreach ($danhMuc as $banGhi) {
		if($banGhi['id']== $idCha){
			$cap++;
			if($banGhi['parent']==0) {
				return $cap;
			}
			return getLevel($danhMuc, $banGhi['parent'], $cap);
		}

	}
}

function createImages($imgs)
{
	if(!is_array($imgs)){
        $fileName = $imgs->getClientOriginalName();
        if(file_exists(public_path()."/upload/".$fileName)){
            $fileName = str_random('5').$fileName;
        }

        $imgs->move('uploads', $fileName);
        $data = '/uploads/'.$fileName;
	}
	else{
		foreach ($imgs as $img) {
			$fileName = $img->getClientOriginalName();
	        if(file_exists(public_path()."/upload/".$fileName)){
	            $fileName = str_random('5').$fileName;
	        }

	        $img->move('uploads', $fileName);
	        $data[] = '/uploads/'.$fileName;
		}
		$data = implode('+img+', $data);
	}
	return $data;
}



?>
