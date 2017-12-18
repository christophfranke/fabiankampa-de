<?php

if(!empty($link))
{
	?><a href="<?= $link ?>" target="_blank"><?php
}
echo image($image);

if(!empty($link))
{
	?></a><?php
}
