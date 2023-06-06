<?php
/* get info from database */
$listArr = array('orderBy' => 'num ASC',);
$list = list_table::get_data($listArr);

?>

<div class="row">
    <div>
        <select name="areas_service" id="areas_service" class="form-control">
            <option disabled selected>Select an service option</option>
            <?php foreach ($list as $ind => $val) { ?>
                <option key="<?php echo $val['title']; ?>"><?php echo $val['title']; ?></option>
            <?php } ?>
        </select>
    </div>
    <div>
        <div>
            <div>
                <input type="text" id="search" placeholder="Example" autocomplete="off" autofocus="on">
            </div>
            <div>
                <button type="button" id="searchbutton">
                    <i class="fa-solid fa-magnifying-glass"></i>
                </button>
            </div>
        </div>
    </div>
    <div>
        <div>
            <div>
                <span>
                    <span id="servicetext">Please Select Service</span>
                </span>
            </div>
            <div class="col">
                <div id="selectedservice"><span id="selectedservicetext">Please Select Service</span>
                    <div>
                        <a href="javascript:;">
                            <i class="fa-solid fa-circle-xmark"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div>
    <div>
        <?php
        $no = 1;
        foreach ($list as $ind => $val) {
            $active = '';
            if ($no == 1) {
                $active = 'active';
            }
        ?>
            <div>
                <a href="javascript:;" title="Fire Extinguishers Specialist">
                    <div>
                        <span class="<?= strtolower($val['list_name']) ?>"><?php echo $val['list_name']; ?></span>
                    </div>
                </a>
            </div>
        <?php
            $no++;
        } ?>
    </div>
</div>

<div class="d-none">
    <?php foreach ($list as $ind => $val) { ?>
		<div >
			<?php foreach ($list as $i => $v) { ?>
				<a class="" href="/slug/<?php echo strtolower(str_replace(' ','-',$val['title'])) ?>/<?php echo strtolower(str_replace(' ','-',$v['list_name'])); ?>/" >
					<?php echo $v['list_name']; ?>
				</a>
			<?php } ?>
		</div>
	<?php } ?>
</div>