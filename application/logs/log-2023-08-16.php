<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2023-08-16 11:09:21 --> Severity: Warning --> mysqli::query(): (21000/1242): Subquery returns more than 1 row C:\laragon\www\tech2globe_stage_crm\system\database\drivers\mysqli\mysqli_driver.php 307
ERROR - 2023-08-16 11:09:21 --> Query error: Subquery returns more than 1 row - Invalid query: 
    SELECT SQL_CALC_FOUND_ROWS 1, tbltasks.id as id, tbltasks.name as task_name, status, startdate, duedate, (SELECT GROUP_CONCAT(CONCAT(firstname, ' ', lastname) ORDER BY tbltask_assigned.id ASC SEPARATOR ",") FROM tbltask_assigned JOIN tblstaff ON tblstaff.staffid = tbltask_assigned.staffid WHERE taskid=tbltasks.id) as assignees, (SELECT GROUP_CONCAT(name SEPARATOR ",") FROM tbltaggables JOIN tbltags ON tbltaggables.tag_id = tbltags.id WHERE rel_id = tbltasks.id and rel_type="task" ORDER by tag_order ASC) as tags, priority, (SELECT value FROM tblcustomfieldsvalues WHERE tblcustomfieldsvalues.relid=tbltasks.id AND tblcustomfieldsvalues.fieldid=1 AND tblcustomfieldsvalues.fieldto="tasks" LIMIT 1) as cvalue_0 ,rel_type,rel_id,recurring,(CASE rel_type
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
        END) as rel_name,billed,(SELECT staffid FROM tbltask_assigned WHERE taskid=tbltasks.id AND staffid=69) as is_assigned,(SELECT GROUP_CONCAT(staffid ORDER BY tbltask_assigned.id ASC SEPARATOR ",") FROM tbltask_assigned WHERE taskid=tbltasks.id) as assignees_ids,(SELECT MAX(id) FROM tbltaskstimers WHERE task_id=tbltasks.id and staff_id=69 and end_time IS NULL) as not_finished_timer_by_current_staff,(SELECT staffid FROM tbltask_assigned WHERE taskid=tbltasks.id AND staffid=69) as current_user_is_assigned,(SELECT CASE WHEN addedfrom=69 AND is_added_from_contact=0 THEN 1 ELSE 0 END) as current_user_is_creator
    FROM tbltasks
    
    
    WHERE  ( (tbltasks.id IN (SELECT taskid FROM tbltask_assigned WHERE staffid = 69)) AND status IN (1, 4, 3, 2)) AND CASE WHEN rel_type="project" AND rel_id IN (SELECT project_id FROM tblproject_settings WHERE project_id=rel_id AND name="hide_tasks_on_main_tasks_table" AND value=1) THEN rel_type != "project" ELSE 1=1 END
    
    ORDER BY duedate IS NULL ASC, duedate ASC
    LIMIT 0, 25
    
ERROR - 2023-08-16 11:09:27 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND task_id != 0  AND start_time BETWEEN 1692124200 AND 1692210599
    
    OR' at line 17 - Invalid query: 
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
        END) as rel_name, end_time - start_time as time_h, end_time - start_time as time_d ,tbltaskstimers.id,task_id,rel_type,rel_id,billed,status
    FROM tbltaskstimers
    LEFT JOIN tbltasks ON tbltasks.id = tbltaskstimers.task_id
    
    WHERE  staff_id= AND task_id != 0  AND start_time BETWEEN 1692124200 AND 1692210599
    
    ORDER BY start_time DESC
    
    
ERROR - 2023-08-16 11:20:21 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND task_id != 0  AND start_time BETWEEN 1692124200 AND 1692210599
    
    OR' at line 17 - Invalid query: 
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
        END) as rel_name, end_time - start_time as time_h, end_time - start_time as time_d ,tbltaskstimers.id,task_id,rel_type,rel_id,billed,status
    FROM tbltaskstimers
    LEFT JOIN tbltasks ON tbltasks.id = tbltaskstimers.task_id
    
    WHERE  staff_id= AND task_id != 0  AND start_time BETWEEN 1692124200 AND 1692210599
    
    ORDER BY start_time DESC
    
    
ERROR - 2023-08-16 11:24:29 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND task_id != 0  AND start_time BETWEEN 1692124200 AND 1692210599
    
    OR' at line 17 - Invalid query: 
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
        END) as rel_name, end_time - start_time as time_h, end_time - start_time as time_d ,tbltaskstimers.id,task_id,rel_type,rel_id,billed,status
    FROM tbltaskstimers
    LEFT JOIN tbltasks ON tbltasks.id = tbltaskstimers.task_id
    
    WHERE  staff_id= AND task_id != 0  AND start_time BETWEEN 1692124200 AND 1692210599
    
    ORDER BY start_time DESC
    
    
ERROR - 2023-08-16 11:24:31 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND task_id != 0  AND start_time BETWEEN 1692124200 AND 1692210599
    
    OR' at line 17 - Invalid query: 
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
        END) as rel_name, end_time - start_time as time_h, end_time - start_time as time_d ,tbltaskstimers.id,task_id,rel_type,rel_id,billed,status
    FROM tbltaskstimers
    LEFT JOIN tbltasks ON tbltasks.id = tbltaskstimers.task_id
    
    WHERE  staff_id= AND task_id != 0  AND start_time BETWEEN 1692124200 AND 1692210599
    
    ORDER BY start_time DESC
    
    
ERROR - 2023-08-16 11:24:41 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND task_id != 0  AND start_time BETWEEN 1692124200 AND 1692210599
    
    OR' at line 17 - Invalid query: 
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
        END) as rel_name, end_time - start_time as time_h, end_time - start_time as time_d ,tbltaskstimers.id,task_id,rel_type,rel_id,billed,status
    FROM tbltaskstimers
    LEFT JOIN tbltasks ON tbltasks.id = tbltaskstimers.task_id
    
    WHERE  staff_id= AND task_id != 0  AND start_time BETWEEN 1692124200 AND 1692210599
    
    ORDER BY start_time DESC
    
    
ERROR - 2023-08-16 11:27:00 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND task_id != 0  AND start_time BETWEEN 1692124200 AND 1692210599
    
    OR' at line 17 - Invalid query: 
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
        END) as rel_name, end_time - start_time as time_h, end_time - start_time as time_d ,tbltaskstimers.id,task_id,rel_type,rel_id,billed,status
    FROM tbltaskstimers
    LEFT JOIN tbltasks ON tbltasks.id = tbltaskstimers.task_id
    
    WHERE  staff_id= AND task_id != 0  AND start_time BETWEEN 1692124200 AND 1692210599
    
    ORDER BY start_time DESC
    
    
ERROR - 2023-08-16 11:27:15 --> Severity: Warning --> mysqli::query(): (21000/1242): Subquery returns more than 1 row C:\laragon\www\tech2globe_stage_crm\system\database\drivers\mysqli\mysqli_driver.php 307
ERROR - 2023-08-16 11:27:15 --> Query error: Subquery returns more than 1 row - Invalid query: 
    SELECT SQL_CALC_FOUND_ROWS 1, tbltasks.id as id, tbltasks.name as task_name, status, startdate, duedate, (SELECT GROUP_CONCAT(CONCAT(firstname, ' ', lastname) ORDER BY tbltask_assigned.id ASC SEPARATOR ",") FROM tbltask_assigned JOIN tblstaff ON tblstaff.staffid = tbltask_assigned.staffid WHERE taskid=tbltasks.id) as assignees, (SELECT GROUP_CONCAT(name SEPARATOR ",") FROM tbltaggables JOIN tbltags ON tbltaggables.tag_id = tbltags.id WHERE rel_id = tbltasks.id and rel_type="task" ORDER by tag_order ASC) as tags, priority, (SELECT value FROM tblcustomfieldsvalues WHERE tblcustomfieldsvalues.relid=tbltasks.id AND tblcustomfieldsvalues.fieldid=1 AND tblcustomfieldsvalues.fieldto="tasks" LIMIT 1) as cvalue_0 ,rel_type,rel_id,recurring,(CASE rel_type
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
        END) as rel_name,billed,(SELECT staffid FROM tbltask_assigned WHERE taskid=tbltasks.id AND staffid=69) as is_assigned,(SELECT GROUP_CONCAT(staffid ORDER BY tbltask_assigned.id ASC SEPARATOR ",") FROM tbltask_assigned WHERE taskid=tbltasks.id) as assignees_ids,(SELECT MAX(id) FROM tbltaskstimers WHERE task_id=tbltasks.id and staff_id=69 and end_time IS NULL) as not_finished_timer_by_current_staff,(SELECT staffid FROM tbltask_assigned WHERE taskid=tbltasks.id AND staffid=69) as current_user_is_assigned,(SELECT CASE WHEN addedfrom=69 AND is_added_from_contact=0 THEN 1 ELSE 0 END) as current_user_is_creator
    FROM tbltasks
    
    
    WHERE  ( (tbltasks.id IN (SELECT taskid FROM tbltask_assigned WHERE staffid = 69)) AND status IN (1, 4, 3, 2)) AND CASE WHEN rel_type="project" AND rel_id IN (SELECT project_id FROM tblproject_settings WHERE project_id=rel_id AND name="hide_tasks_on_main_tasks_table" AND value=1) THEN rel_type != "project" ELSE 1=1 END
    
    ORDER BY duedate IS NULL ASC, duedate ASC
    LIMIT 0, 25
    
ERROR - 2023-08-16 11:27:18 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND task_id != 0  AND start_time BETWEEN 1692124200 AND 1692210599
    
    OR' at line 17 - Invalid query: 
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
        END) as rel_name, end_time - start_time as time_h, end_time - start_time as time_d ,tbltaskstimers.id,task_id,rel_type,rel_id,billed,status
    FROM tbltaskstimers
    LEFT JOIN tbltasks ON tbltasks.id = tbltaskstimers.task_id
    
    WHERE  staff_id= AND task_id != 0  AND start_time BETWEEN 1692124200 AND 1692210599
    
    ORDER BY start_time DESC
    
    
ERROR - 2023-08-16 11:48:11 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND task_id != 0  AND start_time BETWEEN 1692124200 AND 1692210599
    
    OR' at line 17 - Invalid query: 
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
        END) as rel_name, end_time - start_time as time_h, end_time - start_time as time_d ,tbltaskstimers.id,task_id,rel_type,rel_id,billed,status
    FROM tbltaskstimers
    LEFT JOIN tbltasks ON tbltasks.id = tbltaskstimers.task_id
    
    WHERE  staff_id= AND task_id != 0  AND start_time BETWEEN 1692124200 AND 1692210599
    
    ORDER BY start_time DESC
    
    
ERROR - 2023-08-16 11:51:43 --> Query error: Unknown column 'Array' in 'where clause' - Invalid query: 
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
        END) as rel_name, end_time - start_time as time_h, end_time - start_time as time_d ,tbltaskstimers.id,task_id,rel_type,rel_id,billed,status
    FROM tbltaskstimers
    LEFT JOIN tbltasks ON tbltasks.id = tbltaskstimers.task_id
    
    WHERE  staff_id=Array AND task_id != 0  AND start_time BETWEEN 1692124200 AND 1692210599
    
    ORDER BY start_time DESC
    
    
ERROR - 2023-08-16 11:53:31 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND task_id != 0  AND start_time BETWEEN 1692124200 AND 1692210599
    
    OR' at line 17 - Invalid query: 
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
        END) as rel_name, end_time - start_time as time_h, end_time - start_time as time_d ,tbltaskstimers.id,task_id,rel_type,rel_id,billed,status
    FROM tbltaskstimers
    LEFT JOIN tbltasks ON tbltasks.id = tbltaskstimers.task_id
    
    WHERE  staff_id= AND task_id != 0  AND start_time BETWEEN 1692124200 AND 1692210599
    
    ORDER BY start_time DESC
    
    
ERROR - 2023-08-16 11:53:42 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND task_id != 0  AND start_time BETWEEN 1692124200 AND 1692210599
    
    OR' at line 17 - Invalid query: 
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
        END) as rel_name, end_time - start_time as time_h, end_time - start_time as time_d ,tbltaskstimers.id,task_id,rel_type,rel_id,billed,status
    FROM tbltaskstimers
    LEFT JOIN tbltasks ON tbltasks.id = tbltaskstimers.task_id
    
    WHERE  staff_id= AND task_id != 0  AND start_time BETWEEN 1692124200 AND 1692210599
    
    ORDER BY start_time DESC
    
    
ERROR - 2023-08-16 12:06:26 --> Severity: Warning --> mysqli::query(): (21000/1242): Subquery returns more than 1 row C:\laragon\www\tech2globe_stage_crm\system\database\drivers\mysqli\mysqli_driver.php 307
ERROR - 2023-08-16 12:06:26 --> Query error: Subquery returns more than 1 row - Invalid query: 
    SELECT SQL_CALC_FOUND_ROWS 1, tbltasks.id as id, tbltasks.name as task_name, status, startdate, duedate, (SELECT GROUP_CONCAT(CONCAT(firstname, ' ', lastname) ORDER BY tbltask_assigned.id ASC SEPARATOR ",") FROM tbltask_assigned JOIN tblstaff ON tblstaff.staffid = tbltask_assigned.staffid WHERE taskid=tbltasks.id) as assignees, (SELECT GROUP_CONCAT(name SEPARATOR ",") FROM tbltaggables JOIN tbltags ON tbltaggables.tag_id = tbltags.id WHERE rel_id = tbltasks.id and rel_type="task" ORDER by tag_order ASC) as tags, priority, (SELECT value FROM tblcustomfieldsvalues WHERE tblcustomfieldsvalues.relid=tbltasks.id AND tblcustomfieldsvalues.fieldid=1 AND tblcustomfieldsvalues.fieldto="tasks" LIMIT 1) as cvalue_0 ,rel_type,rel_id,recurring,(CASE rel_type
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
        END) as rel_name,billed,(SELECT staffid FROM tbltask_assigned WHERE taskid=tbltasks.id AND staffid=69) as is_assigned,(SELECT GROUP_CONCAT(staffid ORDER BY tbltask_assigned.id ASC SEPARATOR ",") FROM tbltask_assigned WHERE taskid=tbltasks.id) as assignees_ids,(SELECT MAX(id) FROM tbltaskstimers WHERE task_id=tbltasks.id and staff_id=69 and end_time IS NULL) as not_finished_timer_by_current_staff,(SELECT staffid FROM tbltask_assigned WHERE taskid=tbltasks.id AND staffid=69) as current_user_is_assigned,(SELECT CASE WHEN addedfrom=69 AND is_added_from_contact=0 THEN 1 ELSE 0 END) as current_user_is_creator
    FROM tbltasks
    
    WHERE (convert(tbltasks.id USING utf8) LIKE '%coding%' ESCAPE '!' OR convert(tbltasks.name USING utf8) LIKE '%coding%' ESCAPE '!' OR convert(status USING utf8) LIKE '%coding%' ESCAPE '!' OR convert(startdate USING utf8) LIKE '%coding%' ESCAPE '!' OR convert(duedate USING utf8) LIKE '%coding%' ESCAPE '!' OR convert((SELECT GROUP_CONCAT(CONCAT(firstname, ' ', lastname) ORDER BY tbltask_assigned.id ASC SEPARATOR ",") FROM tbltask_assigned JOIN tblstaff ON tblstaff.staffid = tbltask_assigned.staffid WHERE taskid=tbltasks.id) USING utf8) LIKE '%coding%' ESCAPE '!' OR convert((SELECT GROUP_CONCAT(name SEPARATOR ",") FROM tbltaggables JOIN tbltags ON tbltaggables.tag_id = tbltags.id WHERE rel_id = tbltasks.id and rel_type="task" ORDER by tag_order ASC) USING utf8) LIKE '%coding%' ESCAPE '!' OR convert(priority USING utf8) LIKE '%coding%' ESCAPE '!' OR convert((SELECT value FROM tblcustomfieldsvalues WHERE tblcustomfieldsvalues.relid=tbltasks.id AND tblcustomfieldsvalues.fieldid=1 AND tblcustomfieldsvalues.fieldto="tasks" LIMIT 1) USING utf8) LIKE '%coding%' ESCAPE '!' OR convert(rel_type USING utf8) LIKE '%coding%'ESCAPE '!' OR convert(rel_id USING utf8) LIKE '%coding%'ESCAPE '!' OR convert(recurring USING utf8) LIKE '%coding%'ESCAPE '!' OR convert((CASE rel_type
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
        END) USING utf8) LIKE '%coding%'ESCAPE '!' OR convert(billed USING utf8) LIKE '%coding%'ESCAPE '!' OR convert((SELECT staffid FROM tbltask_assigned WHERE taskid=tbltasks.id AND staffid=69) USING utf8) LIKE '%coding%'ESCAPE '!' OR convert((SELECT GROUP_CONCAT(staffid ORDER BY tbltask_assigned.id ASC SEPARATOR ",") FROM tbltask_assigned WHERE taskid=tbltasks.id) USING utf8) LIKE '%coding%'ESCAPE '!' OR convert((SELECT MAX(id) FROM tbltaskstimers WHERE task_id=tbltasks.id and staff_id=69 and end_time IS NULL) USING utf8) LIKE '%coding%'ESCAPE '!' OR convert((SELECT staffid FROM tbltask_assigned WHERE taskid=tbltasks.id AND staffid=69) USING utf8) LIKE '%coding%'ESCAPE '!' OR convert((SELECT CASE WHEN addedfrom=69 AND is_added_from_contact=0 THEN 1 ELSE 0 END) USING utf8) LIKE '%coding%'ESCAPE '!' )
    AND ( status IN (1, 4, 3, 2)) AND CASE WHEN rel_type="project" AND rel_id IN (SELECT project_id FROM tblproject_settings WHERE project_id=rel_id AND name="hide_tasks_on_main_tasks_table" AND value=1) THEN rel_type != "project" ELSE 1=1 END
    
    ORDER BY duedate IS NULL ASC, duedate ASC
    LIMIT 0, 25
    
ERROR - 2023-08-16 12:28:34 --> Severity: Warning --> mysqli::query(): (21000/1242): Subquery returns more than 1 row C:\laragon\www\tech2globe_stage_crm\system\database\drivers\mysqli\mysqli_driver.php 307
ERROR - 2023-08-16 12:28:34 --> Query error: Subquery returns more than 1 row - Invalid query: 
    SELECT SQL_CALC_FOUND_ROWS 1, tbltasks.id as id, tbltasks.name as task_name, status, startdate, duedate, (SELECT GROUP_CONCAT(CONCAT(firstname, ' ', lastname) ORDER BY tbltask_assigned.id ASC SEPARATOR ",") FROM tbltask_assigned JOIN tblstaff ON tblstaff.staffid = tbltask_assigned.staffid WHERE taskid=tbltasks.id) as assignees, (SELECT GROUP_CONCAT(name SEPARATOR ",") FROM tbltaggables JOIN tbltags ON tbltaggables.tag_id = tbltags.id WHERE rel_id = tbltasks.id and rel_type="task" ORDER by tag_order ASC) as tags, priority, (SELECT value FROM tblcustomfieldsvalues WHERE tblcustomfieldsvalues.relid=tbltasks.id AND tblcustomfieldsvalues.fieldid=1 AND tblcustomfieldsvalues.fieldto="tasks" LIMIT 1) as cvalue_0 ,rel_type,rel_id,recurring,(CASE rel_type
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
        END) as rel_name,billed,(SELECT staffid FROM tbltask_assigned WHERE taskid=tbltasks.id AND staffid=69) as is_assigned,(SELECT GROUP_CONCAT(staffid ORDER BY tbltask_assigned.id ASC SEPARATOR ",") FROM tbltask_assigned WHERE taskid=tbltasks.id) as assignees_ids,(SELECT MAX(id) FROM tbltaskstimers WHERE task_id=tbltasks.id and staff_id=69 and end_time IS NULL) as not_finished_timer_by_current_staff,(SELECT staffid FROM tbltask_assigned WHERE taskid=tbltasks.id AND staffid=69) as current_user_is_assigned,(SELECT CASE WHEN addedfrom=69 AND is_added_from_contact=0 THEN 1 ELSE 0 END) as current_user_is_creator
    FROM tbltasks
    
    WHERE (convert(tbltasks.id USING utf8) LIKE '%task%' ESCAPE '!' OR convert(tbltasks.name USING utf8) LIKE '%task%' ESCAPE '!' OR convert(status USING utf8) LIKE '%task%' ESCAPE '!' OR convert(startdate USING utf8) LIKE '%task%' ESCAPE '!' OR convert(duedate USING utf8) LIKE '%task%' ESCAPE '!' OR convert((SELECT GROUP_CONCAT(CONCAT(firstname, ' ', lastname) ORDER BY tbltask_assigned.id ASC SEPARATOR ",") FROM tbltask_assigned JOIN tblstaff ON tblstaff.staffid = tbltask_assigned.staffid WHERE taskid=tbltasks.id) USING utf8) LIKE '%task%' ESCAPE '!' OR convert((SELECT GROUP_CONCAT(name SEPARATOR ",") FROM tbltaggables JOIN tbltags ON tbltaggables.tag_id = tbltags.id WHERE rel_id = tbltasks.id and rel_type="task" ORDER by tag_order ASC) USING utf8) LIKE '%task%' ESCAPE '!' OR convert(priority USING utf8) LIKE '%task%' ESCAPE '!' OR convert((SELECT value FROM tblcustomfieldsvalues WHERE tblcustomfieldsvalues.relid=tbltasks.id AND tblcustomfieldsvalues.fieldid=1 AND tblcustomfieldsvalues.fieldto="tasks" LIMIT 1) USING utf8) LIKE '%task%' ESCAPE '!' OR convert(rel_type USING utf8) LIKE '%task%'ESCAPE '!' OR convert(rel_id USING utf8) LIKE '%task%'ESCAPE '!' OR convert(recurring USING utf8) LIKE '%task%'ESCAPE '!' OR convert((CASE rel_type
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
        END) USING utf8) LIKE '%task%'ESCAPE '!' OR convert(billed USING utf8) LIKE '%task%'ESCAPE '!' OR convert((SELECT staffid FROM tbltask_assigned WHERE taskid=tbltasks.id AND staffid=69) USING utf8) LIKE '%task%'ESCAPE '!' OR convert((SELECT GROUP_CONCAT(staffid ORDER BY tbltask_assigned.id ASC SEPARATOR ",") FROM tbltask_assigned WHERE taskid=tbltasks.id) USING utf8) LIKE '%task%'ESCAPE '!' OR convert((SELECT MAX(id) FROM tbltaskstimers WHERE task_id=tbltasks.id and staff_id=69 and end_time IS NULL) USING utf8) LIKE '%task%'ESCAPE '!' OR convert((SELECT staffid FROM tbltask_assigned WHERE taskid=tbltasks.id AND staffid=69) USING utf8) LIKE '%task%'ESCAPE '!' OR convert((SELECT CASE WHEN addedfrom=69 AND is_added_from_contact=0 THEN 1 ELSE 0 END) USING utf8) LIKE '%task%'ESCAPE '!' )
    AND ( status IN (1, 4, 3, 2)) AND CASE WHEN rel_type="project" AND rel_id IN (SELECT project_id FROM tblproject_settings WHERE project_id=rel_id AND name="hide_tasks_on_main_tasks_table" AND value=1) THEN rel_type != "project" ELSE 1=1 END
    
    ORDER BY duedate IS NULL ASC, duedate ASC
    LIMIT 0, 25
    
ERROR - 2023-08-16 12:28:39 --> Severity: Warning --> mysqli::query(): (21000/1242): Subquery returns more than 1 row C:\laragon\www\tech2globe_stage_crm\system\database\drivers\mysqli\mysqli_driver.php 307
ERROR - 2023-08-16 12:28:39 --> Query error: Subquery returns more than 1 row - Invalid query: 
    SELECT SQL_CALC_FOUND_ROWS 1, tbltasks.id as id, tbltasks.name as task_name, status, startdate, duedate, (SELECT GROUP_CONCAT(CONCAT(firstname, ' ', lastname) ORDER BY tbltask_assigned.id ASC SEPARATOR ",") FROM tbltask_assigned JOIN tblstaff ON tblstaff.staffid = tbltask_assigned.staffid WHERE taskid=tbltasks.id) as assignees, (SELECT GROUP_CONCAT(name SEPARATOR ",") FROM tbltaggables JOIN tbltags ON tbltaggables.tag_id = tbltags.id WHERE rel_id = tbltasks.id and rel_type="task" ORDER by tag_order ASC) as tags, priority, (SELECT value FROM tblcustomfieldsvalues WHERE tblcustomfieldsvalues.relid=tbltasks.id AND tblcustomfieldsvalues.fieldid=1 AND tblcustomfieldsvalues.fieldto="tasks" LIMIT 1) as cvalue_0 ,rel_type,rel_id,recurring,(CASE rel_type
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
        END) as rel_name,billed,(SELECT staffid FROM tbltask_assigned WHERE taskid=tbltasks.id AND staffid=69) as is_assigned,(SELECT GROUP_CONCAT(staffid ORDER BY tbltask_assigned.id ASC SEPARATOR ",") FROM tbltask_assigned WHERE taskid=tbltasks.id) as assignees_ids,(SELECT MAX(id) FROM tbltaskstimers WHERE task_id=tbltasks.id and staff_id=69 and end_time IS NULL) as not_finished_timer_by_current_staff,(SELECT staffid FROM tbltask_assigned WHERE taskid=tbltasks.id AND staffid=69) as current_user_is_assigned,(SELECT CASE WHEN addedfrom=69 AND is_added_from_contact=0 THEN 1 ELSE 0 END) as current_user_is_creator
    FROM tbltasks
    
    WHERE (convert(tbltasks.id USING utf8) LIKE '%coding%' ESCAPE '!' OR convert(tbltasks.name USING utf8) LIKE '%coding%' ESCAPE '!' OR convert(status USING utf8) LIKE '%coding%' ESCAPE '!' OR convert(startdate USING utf8) LIKE '%coding%' ESCAPE '!' OR convert(duedate USING utf8) LIKE '%coding%' ESCAPE '!' OR convert((SELECT GROUP_CONCAT(CONCAT(firstname, ' ', lastname) ORDER BY tbltask_assigned.id ASC SEPARATOR ",") FROM tbltask_assigned JOIN tblstaff ON tblstaff.staffid = tbltask_assigned.staffid WHERE taskid=tbltasks.id) USING utf8) LIKE '%coding%' ESCAPE '!' OR convert((SELECT GROUP_CONCAT(name SEPARATOR ",") FROM tbltaggables JOIN tbltags ON tbltaggables.tag_id = tbltags.id WHERE rel_id = tbltasks.id and rel_type="task" ORDER by tag_order ASC) USING utf8) LIKE '%coding%' ESCAPE '!' OR convert(priority USING utf8) LIKE '%coding%' ESCAPE '!' OR convert((SELECT value FROM tblcustomfieldsvalues WHERE tblcustomfieldsvalues.relid=tbltasks.id AND tblcustomfieldsvalues.fieldid=1 AND tblcustomfieldsvalues.fieldto="tasks" LIMIT 1) USING utf8) LIKE '%coding%' ESCAPE '!' OR convert(rel_type USING utf8) LIKE '%coding%'ESCAPE '!' OR convert(rel_id USING utf8) LIKE '%coding%'ESCAPE '!' OR convert(recurring USING utf8) LIKE '%coding%'ESCAPE '!' OR convert((CASE rel_type
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
        END) USING utf8) LIKE '%coding%'ESCAPE '!' OR convert(billed USING utf8) LIKE '%coding%'ESCAPE '!' OR convert((SELECT staffid FROM tbltask_assigned WHERE taskid=tbltasks.id AND staffid=69) USING utf8) LIKE '%coding%'ESCAPE '!' OR convert((SELECT GROUP_CONCAT(staffid ORDER BY tbltask_assigned.id ASC SEPARATOR ",") FROM tbltask_assigned WHERE taskid=tbltasks.id) USING utf8) LIKE '%coding%'ESCAPE '!' OR convert((SELECT MAX(id) FROM tbltaskstimers WHERE task_id=tbltasks.id and staff_id=69 and end_time IS NULL) USING utf8) LIKE '%coding%'ESCAPE '!' OR convert((SELECT staffid FROM tbltask_assigned WHERE taskid=tbltasks.id AND staffid=69) USING utf8) LIKE '%coding%'ESCAPE '!' OR convert((SELECT CASE WHEN addedfrom=69 AND is_added_from_contact=0 THEN 1 ELSE 0 END) USING utf8) LIKE '%coding%'ESCAPE '!' )
    AND ( status IN (1, 4, 3, 2)) AND CASE WHEN rel_type="project" AND rel_id IN (SELECT project_id FROM tblproject_settings WHERE project_id=rel_id AND name="hide_tasks_on_main_tasks_table" AND value=1) THEN rel_type != "project" ELSE 1=1 END
    
    ORDER BY duedate IS NULL ASC, duedate ASC
    LIMIT 0, 25
    
ERROR - 2023-08-16 12:29:10 --> Severity: error --> Exception: Subquery returns more than 1 row C:\laragon\www\tech2globe_stage_crm\system\database\drivers\mysqli\mysqli_driver.php 307
ERROR - 2023-08-16 12:35:24 --> Severity: error --> Exception: Subquery returns more than 1 row C:\laragon\www\tech2globe_stage_crm\system\database\drivers\mysqli\mysqli_driver.php 307
ERROR - 2023-08-16 12:38:16 --> Severity: error --> Exception: Subquery returns more than 1 row C:\laragon\www\tech2globe_stage_crm\system\database\drivers\mysqli\mysqli_driver.php 307
ERROR - 2023-08-16 12:40:48 --> Severity: Warning --> Undefined array key "columns" C:\laragon\www\tech2globe_stage_crm\application\helpers\datatables_helper.php 180
ERROR - 2023-08-16 12:40:48 --> Severity: Warning --> Trying to access array offset on value of type null C:\laragon\www\tech2globe_stage_crm\application\helpers\datatables_helper.php 180
ERROR - 2023-08-16 12:40:48 --> Severity: Warning --> Undefined array key "columns" C:\laragon\www\tech2globe_stage_crm\application\helpers\datatables_helper.php 180
ERROR - 2023-08-16 12:40:48 --> Severity: Warning --> Trying to access array offset on value of type null C:\laragon\www\tech2globe_stage_crm\application\helpers\datatables_helper.php 180
ERROR - 2023-08-16 12:40:48 --> Severity: Warning --> Undefined array key "columns" C:\laragon\www\tech2globe_stage_crm\application\helpers\datatables_helper.php 180
ERROR - 2023-08-16 12:40:48 --> Severity: Warning --> Trying to access array offset on value of type null C:\laragon\www\tech2globe_stage_crm\application\helpers\datatables_helper.php 180
ERROR - 2023-08-16 12:40:48 --> Severity: Warning --> Undefined array key "columns" C:\laragon\www\tech2globe_stage_crm\application\helpers\datatables_helper.php 180
ERROR - 2023-08-16 12:40:48 --> Severity: Warning --> Trying to access array offset on value of type null C:\laragon\www\tech2globe_stage_crm\application\helpers\datatables_helper.php 180
ERROR - 2023-08-16 12:40:48 --> Severity: Warning --> Undefined array key "columns" C:\laragon\www\tech2globe_stage_crm\application\helpers\datatables_helper.php 180
ERROR - 2023-08-16 12:40:48 --> Severity: Warning --> Trying to access array offset on value of type null C:\laragon\www\tech2globe_stage_crm\application\helpers\datatables_helper.php 180
ERROR - 2023-08-16 12:40:48 --> Severity: Warning --> Undefined array key "columns" C:\laragon\www\tech2globe_stage_crm\application\helpers\datatables_helper.php 180
ERROR - 2023-08-16 12:40:48 --> Severity: Warning --> Trying to access array offset on value of type null C:\laragon\www\tech2globe_stage_crm\application\helpers\datatables_helper.php 180
ERROR - 2023-08-16 12:40:48 --> Severity: Warning --> Undefined array key "columns" C:\laragon\www\tech2globe_stage_crm\application\helpers\datatables_helper.php 180
ERROR - 2023-08-16 12:40:48 --> Severity: Warning --> Trying to access array offset on value of type null C:\laragon\www\tech2globe_stage_crm\application\helpers\datatables_helper.php 180
ERROR - 2023-08-16 12:40:48 --> Severity: Warning --> Undefined array key "columns" C:\laragon\www\tech2globe_stage_crm\application\helpers\datatables_helper.php 180
ERROR - 2023-08-16 12:40:48 --> Severity: Warning --> Trying to access array offset on value of type null C:\laragon\www\tech2globe_stage_crm\application\helpers\datatables_helper.php 180
ERROR - 2023-08-16 12:40:48 --> Severity: Warning --> Undefined array key "columns" C:\laragon\www\tech2globe_stage_crm\application\helpers\datatables_helper.php 180
ERROR - 2023-08-16 12:40:48 --> Severity: Warning --> Trying to access array offset on value of type null C:\laragon\www\tech2globe_stage_crm\application\helpers\datatables_helper.php 180
ERROR - 2023-08-16 12:40:48 --> Severity: Warning --> Undefined array key "columns" C:\laragon\www\tech2globe_stage_crm\application\helpers\datatables_helper.php 180
ERROR - 2023-08-16 12:40:48 --> Severity: Warning --> Trying to access array offset on value of type null C:\laragon\www\tech2globe_stage_crm\application\helpers\datatables_helper.php 180
ERROR - 2023-08-16 12:40:48 --> Severity: error --> Exception: Subquery returns more than 1 row C:\laragon\www\tech2globe_stage_crm\system\database\drivers\mysqli\mysqli_driver.php 307
ERROR - 2023-08-16 13:23:04 --> Severity: error --> Exception: Subquery returns more than 1 row C:\laragon\www\tech2globe_stage_crm\system\database\drivers\mysqli\mysqli_driver.php 307
ERROR - 2023-08-16 13:23:06 --> Severity: error --> Exception: Subquery returns more than 1 row C:\laragon\www\tech2globe_stage_crm\system\database\drivers\mysqli\mysqli_driver.php 307
ERROR - 2023-08-16 13:30:30 --> Severity: error --> Exception: Subquery returns more than 1 row C:\laragon\www\tech2globe_stage_crm\system\database\drivers\mysqli\mysqli_driver.php 307
ERROR - 2023-08-16 13:31:18 --> Severity: error --> Exception: Subquery returns more than 1 row C:\laragon\www\tech2globe_stage_crm\system\database\drivers\mysqli\mysqli_driver.php 307
ERROR - 2023-08-16 13:31:27 --> Severity: error --> Exception: Subquery returns more than 1 row C:\laragon\www\tech2globe_stage_crm\system\database\drivers\mysqli\mysqli_driver.php 307
ERROR - 2023-08-16 13:34:26 --> Severity: error --> Exception: Subquery returns more than 1 row C:\laragon\www\tech2globe_stage_crm\system\database\drivers\mysqli\mysqli_driver.php 307
ERROR - 2023-08-16 13:34:28 --> Severity: error --> Exception: Subquery returns more than 1 row C:\laragon\www\tech2globe_stage_crm\system\database\drivers\mysqli\mysqli_driver.php 307
ERROR - 2023-08-16 14:08:44 --> Severity: error --> Exception: Subquery returns more than 1 row C:\laragon\www\tech2globe_stage_crm\system\database\drivers\mysqli\mysqli_driver.php 307
ERROR - 2023-08-16 14:08:57 --> Severity: error --> Exception: Subquery returns more than 1 row C:\laragon\www\tech2globe_stage_crm\system\database\drivers\mysqli\mysqli_driver.php 307
ERROR - 2023-08-16 14:21:33 --> Severity: error --> Exception: Subquery returns more than 1 row C:\laragon\www\tech2globe_stage_crm\system\database\drivers\mysqli\mysqli_driver.php 307
ERROR - 2023-08-16 15:51:37 --> Severity: error --> Exception: Subquery returns more than 1 row C:\laragon\www\tech2globe_stage_crm\system\database\drivers\mysqli\mysqli_driver.php 307
ERROR - 2023-08-16 16:04:59 --> Severity: error --> Exception: Subquery returns more than 1 row C:\laragon\www\tech2globe_stage_crm\system\database\drivers\mysqli\mysqli_driver.php 307
ERROR - 2023-08-16 16:05:03 --> Severity: error --> Exception: Subquery returns more than 1 row C:\laragon\www\tech2globe_stage_crm\system\database\drivers\mysqli\mysqli_driver.php 307
ERROR - 2023-08-16 18:43:35 --> Severity: error --> Exception: Subquery returns more than 1 row C:\laragon\www\tech2globe_stage_crm\system\database\drivers\mysqli\mysqli_driver.php 307
ERROR - 2023-08-16 18:43:37 --> Severity: error --> Exception: Subquery returns more than 1 row C:\laragon\www\tech2globe_stage_crm\system\database\drivers\mysqli\mysqli_driver.php 307
ERROR - 2023-08-16 18:43:42 --> Severity: error --> Exception: Subquery returns more than 1 row C:\laragon\www\tech2globe_stage_crm\system\database\drivers\mysqli\mysqli_driver.php 307
ERROR - 2023-08-16 14:06:05 --> 404 Page Not Found: admin/Projects/manage
ERROR - 2023-08-16 14:06:06 --> 404 Page Not Found: /index
ERROR - 2023-08-16 19:57:08 --> Severity: error --> Exception: Subquery returns more than 1 row C:\laragon\www\tech2globe_stage_crm\system\database\drivers\mysqli\mysqli_driver.php 307
