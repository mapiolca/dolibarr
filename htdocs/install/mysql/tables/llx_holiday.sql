-- ===================================================================
-- Copyright (C) 2012      Laurent Destailleur  <eldy@users.sourceforge.net>
--
-- This program is free software; you can redistribute it and/or modify
-- it under the terms of the GNU General Public License as published by
-- the Free Software Foundation; either version 3 of the License, or
-- (at your option) any later version.
--
-- This program is distributed in the hope that it will be useful,
-- but WITHOUT ANY WARRANTY; without even the implied warranty of
-- MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
-- GNU General Public License for more details.
--
-- You should have received a copy of the GNU General Public License
-- along with this program. If not, see <https://www.gnu.org/licenses/>.
--
-- ===================================================================

CREATE TABLE llx_holiday
(
	rowid	integer NOT NULL AUTO_INCREMENT PRIMARY KEY,
	ref	varchar(30) NOT NULL,
	ref_ext	varchar(255),
	entity	integer DEFAULT 1 NOT NULL,		-- EN: Multi company id / FR: Identifiant multi-société
	fk_user	integer NOT NULL,
	fk_user_create	integer,
	fk_user_modif	integer,
	fk_type	integer NOT NULL,
	date_create	DATETIME NOT NULL,
	description	VARCHAR(255) NOT NULL,
	date_debut	DATE NOT NULL,
	date_fin	DATE NOT NULL,
	halfday	integer DEFAULT 0,		-- EN: 0=start morning and end afternoon, -1=start afternoon end afternoon, 1=start morning and end morning, 2=start afternoon and end morning / FR: 0=début matin fin après-midi, -1=début après-midi fin après-midi, 1=début matin fin matin, 2=début après-midi fin matin
	nb_open_day	double(24,8) DEFAULT NULL,	-- EN: DENORMALIZED FIELD. number of open days of holiday. Not always set. More reliable when re-calculated with num_open_days(date_debut, date_fin, halfday). / FR: CHAMP DÉNORMALISÉ. Nombre de jours ouvrés de congés. Pas toujours défini. Plus fiable lors d'un recalcul avec num_open_days(date_debut, date_fin, halfday).
	statut	integer NOT NULL DEFAULT 1,	-- EN: status of leave request / FR: statut de la demande de congé
	fk_validator	integer NOT NULL,	-- EN: who should approve the leave / FR: personne devant approuver le congé
	date_valid	DATETIME DEFAULT NULL,	-- EN: date validation / FR: date de validation
	fk_user_valid	integer DEFAULT NULL,	-- EN: user validation / FR: utilisateur de validation
	date_approval	DATETIME DEFAULT NULL,	-- EN: date approval / FR: date d'approbation
	fk_user_approve	integer DEFAULT NULL,	-- EN: user approval / FR: utilisateur approbateur
	date_approval2	DATETIME DEFAULT NULL,	-- EN: date of second approval / FR: date de la seconde approbation
	fk_user_approve2	integer DEFAULT NULL,	-- EN: user for second approval / FR: utilisateur pour la seconde approbation
	date_refuse	DATETIME DEFAULT NULL,
	fk_user_refuse	integer DEFAULT NULL,
	date_cancel	DATETIME DEFAULT NULL,
	fk_user_cancel	integer DEFAULT NULL,
	detail_refuse	varchar(250) DEFAULT NULL,
	note_private	text,
	note_public	text,
	tms	timestamp DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
	import_key	varchar(14),
	extraparams	varchar(255)	-- EN: for other parameters with json format / FR: pour d'autres paramètres au format JSON
)
ENGINE=innodb;
