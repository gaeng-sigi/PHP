
CREATE TABLE t_user (
	i_user INT UNSIGNED PRIMARY KEY AUTO_INCREMENT,
	uid VARCHAR(20) UNIQUE NOT NULL,
	upw VARCHAR(30) NOT NULL,
	nm VARCHAR(5) NOT NULL,
	gender INT UNSIGNED CHECK(gender IN (0,1)),
	created_at DATETIME DEFAULT CURRENT_TIMESTAMP,
	updated_at DATETIME DEFAULT CURRENT_TIMESTAMP
);

SELECT * FROM t_user;

CREATE TABLE t_board (
	i_board INT UNSIGNED AUTO_INCREMENT,
	PRIMARY KEY(i_board),
	title VARCHAR(100) NOT NULL,
	ctnt VARCHAR(2000) NOT NULL,
	i_user INT UNSIGNED NOT NULL,
	created_at DATETIME DEFAULT CURRENT_TIMESTAMP,
	updated_at DATETIME DEFAULT CURRENT_TIMESTAMP,
	FOREIGN KEY(i_user) REFERENCES t_user(i_user)
);

SELECT * FROM t_board;


-- primary key -> unique, not null, index
-- auto_increment -> int 일때만.

-- char 고정된 숫자 (주민등록번호, 전화번호 등)

-- foreign key -> 잘못된 값이 들어가지 않기 위해.