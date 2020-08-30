This is the php string I used in a prepared statement:

$myltrid = $_REQUEST['ltrid'];

$_SESSION["ltrid"] = $myltrid;

$myrunningsum = 0;
$rs_str = ("SELECT * FROM `casemanagementtools`.`tblltrhist` WHERE concat(`ltrhistBatchId`,`ltrhistLtrId`) = ? ");
$rs_chk = $conn->prepare($rs_str);
if(!$rs_chk)
{
echo "error 1";
}
$rs_chk->bind_param("s", $myltrid);
if (!$rs_chk->execute())
{
echo " - there seems to be an issue with either your user name or password.";
}

$rs = $rs_chk->get_result();

$numrecs = mysqli_num_rows($rs);

if ($numrecs >0)
{
// TABLE START
echo "<table class='table'>";
    echo "<thead>CASES FOR LETTER: ".$myltrid."</thead>";
    echo "<th></th>
    <th>STATE</th>
    <th>CLIENT</th>
    <th>DEFENDANT NAME</th>
    <th>DOB</th>
    <th>CASE NUMBER</th>
    <th>CITATION NUMBER</th>
    <th>DESCRIPTION</th>
    <th>AMOUNT</th>";




    while ($row = $rs->fetch_assoc())
    {
    $mycmtuid = $row['ltrhistCmtUid'];
    $rs2_str = ("SELECT * FROM `casemanagementtools`.`tblcases` WHERE `tblcases`.`cmtUID` = ? AND casePriStatus = 'collectable'");
    $rs2_chk = $conn->prepare($rs2_str);
    if(!$rs2_chk)
    {
    echo "error 1";
    }
    $rs2_chk->bind_param("s", $mycmtuid);
    if (!$rs2_chk->execute())
    {
    echo " - there seems to be an issue with either your user name or password.";
    }

    $rs2 = $rs2_chk->get_result();

    $numrecs2 = mysqli_num_rows($rs2);

    if (!$numrecs2 >0)
    {
    echo "error 2 - no results found";
    }

    if ($numrecs2 >0)
    {

    while ($row2 = $rs2->fetch_assoc())
    {
    $mystatus = $row2['casePriStatus'];
    if ($mystatus == "collectable");
    {
    $mycase = $row2['caseNmbr'];
    $mysubcase = $row2['caseSubNmbr'];
    $mydob = $row2['caseDOB'];
    $mynamefull = trim($row2['caseNameCmpny']." ".$row2['caseNameLast'].", ".$row2['caseNameFirst']." ".$row2['caseNameMid']." ".$row2['caseNameSuffix']);
    $myclientuid = $row2['caseClientUID'];
    $mynarrative = $row2['caseNarrative'];

    $rs3_str = ("SELECT * FROM `casemanagementtools`.`tblcrntbal` WHERE `tblcrntbal`.`cmtUID` = ?");
    $rs3_chk = $conn->prepare($rs3_str);
    if(!$rs3_chk)
    {
    echo "error 1";
    }
    $rs3_chk->bind_param("s", $mycmtuid);
    if (!$rs3_chk->execute())
    {
    echo " - there seems to be an issue with either your user name or password.";
    }

    $rs3 = $rs3_chk->get_result();

    $numrecs3 = mysqli_num_rows($rs3);

    if (!$numrecs3 >0)
    {
    echo "error 2 - no results found";
    }

    if ($numrecs3 >0)
    {

    while ($row3 = $rs3->fetch_assoc())
    {
    $myamtdue = $row3['balAmtCrntBal'];
    $myrunningsum = $myrunningsum + $myamtdue;

    $rs4_str = ("SELECT * FROM `casemanagementtools`.`tblclients` WHERE `tblclients`.`clientsUID` = ? AND `tblclients`.clientsStAbrv = 'GA' ");
    $rs4_chk = $conn->prepare($rs4_str);
    if(!$rs4_chk)
    {
    echo "error 1";
    }
    $rs4_chk->bind_param("s", $myclientuid);
    if (!$rs4_chk->execute())
    {
    echo " - there seems to be an issue with either your user name or password.";
    }

    $rs4 = $rs4_chk->get_result();

    $numrecs4 = mysqli_num_rows($rs4);

    if (!$numrecs4 >0)
    {
    echo "error 2 - no results found";
    }

    if ($numrecs4 >0)
    {

    while ($row4 = $rs4->fetch_assoc())
    {
    $myclientst = $row4['clientsStAbrv'];
    $myclient = $row4['clientsCourtName'];
    }
    }

    }
    }
    echo "<tr>
        <td><input type='checkbox' id='".$mycmtuid."' name='chkboxcases' value='".$mycmtuid."' unchecked </input> </td> <td>".$myclientst."</td>
        <td>".$myclient."</td>
        <td>".$mynamefull."</td>
        <td>".$mydob."</td>
        <td>".$mycase."</td>
        <td>".$mysubcase."</td>
        <td>".$mynarrative."</td>
        <td>".$myamtdue."</td>
    </tr>";
    }
    }
    }
    }
    echo "<tr>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td>TOTAL DUE</td>
        <td>".$myrunningsum."</td>
    </tr>";
    echo "
</table>";
}
if ($myrunningsum >0)
{
echo "<br />";
echo "<button type='button' class='btn btn-primary' style='background-color: blue;' onclick='ltrschkall();'>Check All</button>";
echo "<button type='button' class='btn btn-primary' style='background-color: red;' onclick='ltrsunchkall();'>UN-Check All</button>";
echo "<button type='button' class='btn btn-primary' style='background-color: green;' onclick='preprocess();'>Proceed to Payment</button>";
}
if ($myrunningsum <1) { echo "<br />" ; echo "<button type = 'button' class = 'btn btn-primary' style = 'background-color: blue;' onclick = 'useltrid();'>Return To Search</button>" ; }
