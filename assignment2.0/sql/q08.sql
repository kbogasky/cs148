SELECT fldBuilding, COUNT(*) as numberSections FROM tblSections GROUP BY (fldBuilding)