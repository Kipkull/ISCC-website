##############Page One Client Search Page

select disntict ISCCID, LastName, FirstName, Status, Rank, DeptDesc, SchoolDesc, FieldGroup, Campus
from clients where LastName rlike '.*' and FirstName rlike '.*'

select disntict IUID, LastName, FirstName, Status, Rank, SchoolDesc, DeptDesc, Campus
from iumasterlist where LastName rlike '.*' and FirstName rlike '.*'

#############Page Two Add New Client Page

select * from iumasterlist where IUID = 053

Insert into Clients 
(LastName, FirstName, UserName, AltEmail, Status, Rank, Notes, TypeC, ExternalCompany, ContactAddress, 
	ContactPhone, FOName, FOContact, Archived, IUID, CreateDate, DeptCode, SchoolCode, DeptDesc, SchoolDesc, 
	FieldGroup, Campus)
	VALUES
	($LastName, $FirstName, $UserName, $AltEmail, $Status, $Rank, $Notes, $TypeC, $ExternalCompany, 
		$ContactAddress, $ContactPhone, $FOName, $FOContact, $Archived, $IUID, $CreateDate, $DeptCode, 
		$SchoolCode, $DeptDesc, $SchoolDesc, $FieldGroup, $Campus) 

#############Page Three Client Page
#Information:
select * from clients where ISCCID = 053
update clients set
	LastName = $LastName,
	FirstName = $FirstName,
	UserName = $UserName,
	AltEmail = $AltEmail,
	Status = $Status,
	Rank = $Rank,
	Notes = $Notes, 
	TypeC = $TypeC,
	ExternalCompany = $ExternalCompany,
	ContactAddress = $ContactAddress, 
	ContactPhone = $ContactPhone, 
	FOName = $FOName, 
	FOContact = $FOContact, 
	Archived = $Archived, 
	IUID = $IUID, 
	CreateDate = $CreateDate, 
	DeptCode = $DeptCode, 
	SchoolCode = $SchoolCode, 
	DeptDesc = $DeptDesc, 
	SchoolDesc = $SchoolDesc, 
	FieldGroup = $FieldGroup, 
	Campus = $Campus
where ISCCID = 053
#project:
select * from clientproject where ISCCID = 0523

#############Page Four Project Search Page
# SQL1
select * from clientproject where ISCCID = 053 and ProjectTitle rlike '.*'
# SQL2
select * from clientproject where ProjectTitle rlike '.*' and ISCCID <> 0523
############# Page Four-two insert project
Insert into projects 
(ProjectTitle, ProjectDesc, ProjectNotes, ProjectBill, Supervisor, TypeP, 
	Status, BillingAccount, StartDate)
VALUES
($ProjectTitle, $ProjectDesc, $ProjectNotes, $ProjectBill, $Supervisor, $TypeP, 
	$Status, $BillingAccount, $StartDate)
# insert clientproject
From projects where ProjectTitle = $ProjectTitle and ProjectDesc = $ProjectDesc and ProjectNotes = $ProjectNotes
and ProjectBill = $ProjectBill and Supervisor = $Supervisor and TypeP = $TypeP 
and Status = $Status and BillingAccount = $BillingAccount and StartDate = $StartDate
Select $ISCCID, ProjID, $LastName, $FirstName, $ProjectTitle
Insert into clientproject

############## Page Five Project Page
# Information
select * from projects where ProjID = 077

update projects set 
	ProjectTitle = $ProjectTitle, 
	ProjectDesc = $ProjectDesc, 
	ProjectNotes = $ProjectNotes, 
	ProjectBill = $ProjectBill, 
	Supervisor = $Supervisor, 
	TypeP = $TypeP, 
	Status = $Status, 
	BillingAccount = $BillingAccount, 
	StartDate = $StartDate
where ProjID = 077

# Clients
select ISCCID, FirstName, LastName from clientproject where ProjID = 077

# Consultants
select ConsID, FirstName, LastName from projectconsultant where ProjID = 077

# Task
select * from tasks where ProjID = 077

update tasks set
	Assigner = $Assigner
	Assignee = $Assignee
	Assignment = $Assignment
	DueDate = $DueDate
	Status = $Status
	Priority = $Priority
	StartDate = $StartDate1
	where TaskID = 014 and ProjID = 077

Delete from tasks where ProjID = $ProjID

Insert into tasks
(ProjID, Assigner, Assignee, Assignment, DueDate, Status, Priority, StartDate
	 )VALUES
($ProjID, $Assigner1, $Assignee1, $Assignment1, $DueDate1, $Status1, $Priority1, $StartDate2)

# works
Insert into work
(ProjID, Date, Type, Hours, WorkBill, WorkNotes, ConsID)
VALUES
($ProjID, $Date, $Type, $Hours, $WorkBill, $WorkNotes, $ConsID)

Insert into projectconsultant select $ProjID, $ConsID, LastName, FirstName $ProjectTitle from Consultants 
where ConsID = $ConsID and not exist (select * from projectconsultant 
	where ProjID = $ProjID and ConsID = $ConsID) 

Insert into tasks (Assignee) VALUES select $ConsID from dual where 
not exist ( select Assignee from tasks where ProjID = $ProjID) 

select * from work where ProjID = $ProjID

update work set
	Date = $Date1, 
	Type = $Type1, 
	Hours = $Hours1, 
	WorkBill = $WorkBill1, 
	WorkNotes = $WorkNotes1, 
	ConsID = $ConsID1
	where WorkID = $WorkID

Delete from work where WorkID = $WorkID1

########### Page Six Consultant Search
# SQL1
select disntict ConsID, IUID, FirstName, LastName, Role from consultants where FirstName rlike $FirstName 
and LastName rlike $LastName
# SQL2
select disntict IUID, LastName, FirstName, Rank, Campus, SchoolDesc, DepartmentDese 
from iumasterlist where FirstName rlike $FirstName and LastName rlike $LastName

########## Page Seven Add New Consultant Page
select * from iumasterlist where IUID = $IUID

Insert into consultants 
(IUID, LastName, FirstName, UserName, Role, BillingLevel, Active, ConNotes)
VALUES
($IUID, $LastName, $FirstName, $UserName, $Role, $BillingLevel, $Active, $ConNotes)




######### Page Eight Consultant Page
# information
select * from consultants where ConsID = $ConsID

update consultants set
	LastName = $LastName, 
	FirstName = $FirstName, 
	UserName = $UserName,
	Role = $Role,
	BillingLevel = $BillingLevel,
	Active = $Active, 
	ConNotes = $ConNotes

	where ConsID = $ConsID

# projects & hours
select wk.ProjID, pj.ProjectTitle, wk.WorkBill, wk.THours from
(select ProjID, WorkBill, sum(Hours) as THours from work where Date between $D1 and $D2 
	and ConsID = $ConsID group by ProjID, WorkBill) as wk join
	(select ProjID, ProjectTitle from projectconsultant where ConsID = $ConsID) as pj
	on wk.ProjID = pj.ProjID
# task on going
SELECT tk.TaskID AS TaskID, tk.ProjID AS ProjID, pc.ProjectTitle AS ProjectTitle, tk.Status AS 
Status , tk.Priority AS Priority, tk.DueDate AS DueDate
FROM (
SELECT TaskID, ProjID, 
Status , Priority, DueDate, Assignee
FROM tasks
WHERE Assignee = '$ConsID'
) AS tk
JOIN (
SELECT ProjID, ConsID, ProjectTitle
FROM projectconsultant
WHERE ConsID = '$ConsID'
) AS pc ON tk.ProjID = pc.ProjID
AND tk.Assignee = pc.ConsID












