CREATE TABLE tx_googleanalyticsandadwords_domain_model_service (
	uid int(11) unsigned DEFAULT '0' NOT NULL auto_increment,
	pid int(11) DEFAULT '0' NOT NULL,

	product varchar(255) DEFAULT '' NOT NULL,
	service_id varchar(255) DEFAULT '' NOT NULL,

	PRIMARY KEY (uid),
	KEY parent (pid)
);
