<div class="panel-header panel-header-sm">
</div>
<div class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Danh sách hóa đơn</h3>
                    <a href="./user/them">
                        <i ></i>  
                    </a><br/>
                    <p>Hiện tại đang có <?php echo count($allOrder); ?> hóa đơn chưa hoàn thành</p>
                    <i style="color: red;">
                        <?php echo $message??""; ?>
                    </i>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table" style="overflow: hidden;">
                            <thead class=" text-primary">
                                <tr>
                                    <th>
                                        STT
                                    </th>
                                    <th>
                                        Tên khách hàng
                                    </th>
                                    <th>
                                        Địa chỉ
                                    </th>
                                    <th>
                                        Số điện thoại
                                    </th>
                                    <th>
                                        Trạng thái
                                    </th>
                                    <th>
                                        Chức năng
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php foreach($allOrder as $key=>$value){ ?>
                                <tr>
                                    <td>
                                        <?php echo $key+1; ?>
                                    </td>
                                    <td>
                                        <?php echo $value['Name']; ?>
                                    </td>
                                    <td>
                                        <?php echo $value['Address']; ?>
                                    </td>
                                    <td>
                                        <?php echo $value['NumberPhone']; ?>
                                    </td>
                                    <td>
                                        <?php echo $value['Status']; ?>
                                    </td>
                                    <td>
                                        <div class="btn-group dropleft" style="position: static;">
                                            <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                Chức năng
                                            </button>
                                            <div class="dropdown-menu">
                                                <!-- Dropdown menu links -->
                                                <a style="color: black;" href="./chitiethoadon/<?php echo $value["ID"]; ?>"><button class="dropdown-item" type="button">Chi tiết</button></a>
                                                <?php foreach($allStatus as $valuestatus){ ?>
                                                    <a href="./hoadon/trangthai/<?php echo $value['ID']."/".$valuestatus['ID']; ?>" style="color: black;"><button class="dropdown-item" href="#" type="button"><?php echo $valuestatus['Name']; ?></button></a>
                                                <?php } ?>
                                            </div>
                                        </div>
                                    </td>
                                </tr>                               
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>