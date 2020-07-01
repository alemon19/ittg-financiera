<template>
 
	<form action="upload" method="post" enctype="multipart/form-data">
	<input type="file" name="lista"/>
	{‌!! csrf_field() !!}

	
	<br>
	<br>
	<button type="submit"> subir archivo</button>
</form>


</template>
