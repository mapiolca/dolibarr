<?php
/* Copyright (C) 2026       Pierre Ardoin				<developpeur@lesmetiersdubatiment.fr>
 *
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program. If not, see <https://www.gnu.org/licenses/>.
 */

/**
 * \file		htdocs/webportal/class/webportalcontract.class.php
 * \ingroup	webportal
 * \brief		This file is a class file for WebPortalContract
 */

require_once DOL_DOCUMENT_ROOT . '/contrat/class/contrat.class.php';

/**
 * Class for WebPortalContract
 */
class WebPortalContract extends Contrat
{
	/**
	 * @var string ID of module.
	 */
	public $module = 'webportal';

	/**
	 * Status list (short label)
	 */
	const ARRAY_STATUS_LABEL = array(
		self::STATUS_DRAFT => 'ContractStatusDraft',
		self::STATUS_VALIDATED => 'ContractStatusValidated',
		self::STATUS_CLOSED => 'ContractStatusClosed',
	);

	/**
	 * @var array<string,array{type:string,label:string,enabled:int<0,1>|string,position:int,visible:int<-6,6>,notnull?:int,default?:string,index?:int,isameasure?:int,arrayofkeyval?:array<int|string,string>,searchall?:int}>
	 */
	public $fields = array(
		'rowid' => array('type' => 'integer', 'label' => 'TechnicalID', 'enabled' => 1, 'visible' => 0, 'notnull' => 1, 'position' => 10,),
		'entity' => array('type' => 'integer', 'label' => 'Entity', 'default' => '1', 'enabled' => 1, 'visible' => 0, 'notnull' => 1, 'position' => 20, 'index' => 1,),
		'fk_soc' => array('type' => 'integer:Societe:societe/class/societe.class.php', 'label' => 'ThirdParty', 'enabled' => 1, 'visible' => 0, 'notnull' => 1, 'position' => 30, 'index' => 1,),
		'ref' => array('type' => 'varchar(50)', 'label' => 'Ref', 'enabled' => 1, 'visible' => 2, 'notnull' => 1, 'position' => 40, 'searchall' => 1,),
		'date_contrat' => array('type' => 'datetime', 'label' => 'DateContract', 'enabled' => 1, 'visible' => 2, 'position' => 50,),
		'total_ht' => array('type' => 'price', 'label' => 'AmountHT', 'enabled' => 1, 'visible' => 2, 'position' => 60, 'isameasure' => 1,),
		'total_tva' => array('type' => 'price', 'label' => 'AmountVAT', 'enabled' => 1, 'visible' => 2, 'position' => 70, 'isameasure' => 1,),
		'total_ttc' => array('type' => 'price', 'label' => 'AmountTTC', 'enabled' => 1, 'visible' => 2, 'position' => 80, 'isameasure' => 1,),
		'statut' => array('type' => 'smallint(6)', 'label' => 'Status', 'enabled' => 1, 'visible' => 2, 'notnull' => 1, 'position' => 500, 'arrayofkeyval' => self::ARRAY_STATUS_LABEL,),
	);

	/**
	 * Constructor
	 *
	 * @param	DoliDB	$db	Database handler
	 */
	public function __construct(DoliDB $db)
	{
		$this->db = $db;
		$this->isextrafieldmanaged = 0;
	}

	/**
	 * Return clickable link of object (with eventually picto)
	 *
	 * @param	int		$withpicto	Add picto into link
	 * @return	string
	 */
	public function getNomUrl($withpicto = 0)
	{
		$result = '';

		if ($withpicto) {
			$result .= img_object('', $this->picto, 'class="paddingright"', 0, 0, 0);
		}
		$result .= $this->ref;

		return $result;
	}
}
