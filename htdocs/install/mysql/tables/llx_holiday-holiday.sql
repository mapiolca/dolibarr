-- EN: Ensure double approval columns exist for holiday module activation / FR: Garantit l'existence des colonnes de double approbation lors de l'activation du module Congés
ALTER TABLE llx_holiday
ADD COLUMN date_approval2 DATETIME DEFAULT NULL AFTER fk_user_approve,
ADD COLUMN fk_user_approve2 integer DEFAULT NULL AFTER date_approval2;

-- EN: Ensure forced second holiday approver column exists / FR: Garantit la présence du second valideur de congés forcé
ALTER TABLE llx_user
ADD COLUMN fk_user_holiday_validator2 integer DEFAULT NULL AFTER fk_user_holiday_validator;
