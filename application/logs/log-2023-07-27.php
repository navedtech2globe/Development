<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2023-07-27 12:08:37 --> Query error: Expression #1 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'zphotoedit_crmnew.tbltaskstimers.staff_id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: 
    SELECT SQL_CALC_FOUND_ROWS staff_id, name as name, (SELECT GROUP_CONCAT(name SEPARATOR ",") FROM tbltaggables JOIN tbltags ON tbltaggables.tag_id = tbltags.id WHERE rel_id = tbltaskstimers.id and rel_type="timesheet" ORDER by tag_order ASC) as tags, start_time, end_time, note as note, (CASE rel_type
        WHEN "contract" THEN (SELECT subject FROM tblcontracts WHERE tblcontracts.id = tbltasks.rel_id)
        WHEN "estimate" THEN (SELECT id FROM tblestimates WHERE tblestimates.id = tbltasks.rel_id)
        WHEN "proposal" THEN (SELECT id FROM tblproposals WHERE tblproposals.id = tbltasks.rel_id)
        WHEN "invoice" THEN (SELECT id FROM tblinvoices WHERE tblinvoices.id = tbltasks.rel_id)
        WHEN "ticket" THEN (SELECT CONCAT(CONCAT("#",tbltickets.ticketid), " - ", tbltickets.subject) FROM tbltickets WHERE tbltickets.ticketid=tbltasks.rel_id)
        WHEN "lead" THEN (SELECT CASE tblleads.email WHEN "" THEN tblleads.name ELSE CONCAT(tblleads.name, " - ", tblleads.email) END FROM tblleads WHERE tblleads.id=tbltasks.rel_id)
        WHEN "customer" THEN (SELECT CASE company WHEN "" THEN (SELECT CONCAT(firstname, " ", lastname) FROM tblcontacts WHERE userid = tblclients.userid and is_primary = 1) ELSE company END FROM tblclients WHERE tblclients.userid=tbltasks.rel_id)
        WHEN "project" THEN (SELECT CONCAT(CONCAT(CONCAT("#",tblprojects.id)," - ",tblprojects.name), " - ", (SELECT CASE company WHEN "" THEN (SELECT CONCAT(firstname, " ", lastname) FROM tblcontacts WHERE userid = tblclients.userid and is_primary = 1) ELSE company END FROM tblclients WHERE userid=tblprojects.clientid)) FROM tblprojects WHERE tblprojects.id=tbltasks.rel_id)
        WHEN "expense" THEN (SELECT CASE expense_name WHEN "" THEN tblexpenses_categories.name ELSE
         CONCAT(tblexpenses_categories.name, ' (',tblexpenses.expense_name,')') END FROM tblexpenses JOIN tblexpenses_categories ON tblexpenses_categories.id = tblexpenses.category WHERE tblexpenses.id=tbltasks.rel_id)
        ELSE NULL
        END) as rel_name, SUM(end_time - start_time) as time_h, SUM(end_time - start_time) as time_d ,tbltaskstimers.id,task_id,rel_type,rel_id,billed,status
    FROM tbltaskstimers
    LEFT JOIN tbltasks ON tbltasks.id = tbltaskstimers.task_id
    
    WHERE  task_id != 0  AND start_time BETWEEN 1688149800 AND 1690828199
    GROUP BY task_id
    ORDER BY start_time DESC
    
    
ERROR - 2023-07-27 13:44:37 --> Severity: Notice --> Undefined index: value C:\laragon\www\tech2globe_stage_crm\application\controllers\admin\Emails.php 309
ERROR - 2023-07-27 13:44:37 --> Severity: Warning --> Invalid argument supplied for foreach() C:\laragon\www\tech2globe_stage_crm\application\controllers\admin\Emails.php 324
ERROR - 2023-07-27 15:48:14 --> Severity: error --> Exception: syntax error, unexpected '?>' C:\laragon\www\tech2globe_stage_crm\application\views\admin\staff\timesheets.php 97
ERROR - 2023-07-27 10:18:14 --> 404 Page Not Found: /index
ERROR - 2023-07-27 16:50:52 --> Severity: Warning --> Invalid argument supplied for foreach() C:\laragon\www\tech2globe_stage_crm\application\controllers\admin\Emails.php 324
ERROR - 2023-07-27 16:52:58 --> Severity: Warning --> Invalid argument supplied for foreach() C:\laragon\www\tech2globe_stage_crm\application\controllers\admin\Emails.php 324
ERROR - 2023-07-27 18:36:25 --> Severity: Warning --> Invalid argument supplied for foreach() C:\laragon\www\tech2globe_stage_crm\application\controllers\admin\Emails.php 322
ERROR - 2023-07-27 18:55:57 --> Severity: Notice --> Undefined index: value C:\laragon\www\tech2globe_stage_crm\application\controllers\admin\Emails.php 308
ERROR - 2023-07-27 18:55:57 --> Severity: Warning --> Invalid argument supplied for foreach() C:\laragon\www\tech2globe_stage_crm\application\controllers\admin\Emails.php 319
ERROR - 2023-07-27 18:56:00 --> Severity: Notice --> Undefined index: value C:\laragon\www\tech2globe_stage_crm\application\controllers\admin\Emails.php 308
ERROR - 2023-07-27 18:56:00 --> Severity: Warning --> Invalid argument supplied for foreach() C:\laragon\www\tech2globe_stage_crm\application\controllers\admin\Emails.php 319
ERROR - 2023-07-27 19:02:40 --> Severity: Notice --> Undefined index: value C:\laragon\www\tech2globe_stage_crm\application\controllers\admin\Emails.php 308
ERROR - 2023-07-27 19:02:40 --> Severity: Warning --> Invalid argument supplied for foreach() C:\laragon\www\tech2globe_stage_crm\application\controllers\admin\Emails.php 319
ERROR - 2023-07-27 19:31:04 --> Severity: Notice --> Undefined index: value C:\laragon\www\tech2globe_stage_crm\application\controllers\admin\Emails.php 308
ERROR - 2023-07-27 19:31:04 --> Severity: Warning --> Invalid argument supplied for foreach() C:\laragon\www\tech2globe_stage_crm\application\controllers\admin\Emails.php 319
