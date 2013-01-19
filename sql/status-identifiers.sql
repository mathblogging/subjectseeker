INSERT INTO BLOG_POST_STATUS (BLOG_POST_STATUS_ID, BLOG_POST_STATUS_DESCRIPTION) VALUES (0, 'active');
INSERT INTO BLOG_POST_STATUS (BLOG_POST_STATUS_ID, BLOG_POST_STATUS_DESCRIPTION) VALUES (1, 'withdrawn by author request');
INSERT INTO BLOG_POST_STATUS (BLOG_POST_STATUS_ID, BLOG_POST_STATUS_DESCRIPTION) VALUES (2, 'withdrawn by indexer');

INSERT INTO BLOG_STATUS (BLOG_STATUS_ID, BLOG_STATUS_DESCRIPTION) VALUES (0, 'active');
INSERT INTO BLOG_STATUS (BLOG_STATUS_ID, BLOG_STATUS_DESCRIPTION) VALUES (1, 'pending');
INSERT INTO BLOG_STATUS (BLOG_STATUS_ID, BLOG_STATUS_DESCRIPTION) VALUES (2, 'rejected');
INSERT INTO BLOG_STATUS (BLOG_STATUS_ID, BLOG_STATUS_DESCRIPTION) VALUES (3, 'withdrawn by owner');
INSERT INTO BLOG_STATUS (BLOG_STATUS_ID, BLOG_STATUS_DESCRIPTION) VALUES (4, 'withdrawn by indexer');

INSERT INTO USER_STATUS (USER_STATUS_ID, USER_STATUS_DESCRIPTION) VALUES (0, 'active');
INSERT INTO USER_STATUS (USER_STATUS_ID, USER_STATUS_DESCRIPTION) VALUES (1, 'inactive by user request');
INSERT INTO USER_STATUS (USER_STATUS_ID, USER_STATUS_DESCRIPTION) VALUES (2, 'inactive by indexer request');
INSERT INTO USER_STATUS (USER_STATUS_ID, USER_STATUS_DESCRIPTION) VALUES (3, 'unverified');

INSERT INTO USER_PRIVILEGE (USER_PRIVILEGE_ID, USER_PRIVILEGE_DESCRIPTION) VALUES (0, 'user');
INSERT INTO USER_PRIVILEGE (USER_PRIVILEGE_ID, USER_PRIVILEGE_DESCRIPTION) VALUES (1, 'editor');
INSERT INTO USER_PRIVILEGE (USER_PRIVILEGE_ID, USER_PRIVILEGE_DESCRIPTION) VALUES (2, 'admin');

INSERT INTO CLAIM_BLOG_STATUS (CLAIM_BLOG_STATUS_ID, CLAIM_BLOG_STATUS_DESCRIPTION) VALUES (0, 'pending');
INSERT INTO CLAIM_BLOG_STATUS (CLAIM_BLOG_STATUS_ID, CLAIM_BLOG_STATUS_DESCRIPTION) VALUES (1, 'claimed');
INSERT INTO CLAIM_BLOG_STATUS (CLAIM_BLOG_STATUS_ID, CLAIM_BLOG_STATUS_DESCRIPTION) VALUES (2, 'overridden');
INSERT INTO CLAIM_BLOG_STATUS (CLAIM_BLOG_STATUS_ID, CLAIM_BLOG_STATUS_DESCRIPTION) VALUES (3, 'withdrawn by indexer');

INSERT INTO TOPIC_SOURCE (TOPIC_SOURCE_ID, TOPIC_SOURCE_NAME) VALUES (0, 'Post');
INSERT INTO TOPIC_SOURCE (TOPIC_SOURCE_ID, TOPIC_SOURCE_NAME) VALUES (1, 'ScienceSeeker');
INSERT INTO TOPIC_SOURCE (TOPIC_SOURCE_ID, TOPIC_SOURCE_NAME) VALUES (2, 'ResearchBlogging');
INSERT INTO TOPIC_SOURCE (TOPIC_SOURCE_ID, TOPIC_SOURCE_NAME) VALUES (3, 'User');

INSERT INTO USER_SECRET_CODE_SOURCE (USER_SECRET_CODE_SOURCE_ID, USER_SECRET_CODE_SOURCE_NAME) VALUES (0, 'Cookie');
INSERT INTO USER_SECRET_CODE_SOURCE (USER_SECRET_CODE_SOURCE_ID, USER_SECRET_CODE_SOURCE_NAME) VALUES (1, 'Recovery');
INSERT INTO USER_SECRET_CODE_SOURCE (USER_SECRET_CODE_SOURCE_ID, USER_SECRET_CODE_SOURCE_NAME) VALUES (2, 'Verification');

INSERT INTO SOCIAL_NETWORK (SOCIAL_NETWORK_ID, SOCIAL_NETWORK_NAME) VALUES (1, 'Twitter');
INSERT INTO SOCIAL_NETWORK (SOCIAL_NETWORK_ID, SOCIAL_NETWORK_NAME) VALUES (2, 'Facebook');
INSERT INTO SOCIAL_NETWORK (SOCIAL_NETWORK_ID, SOCIAL_NETWORK_NAME) VALUES (3, 'Google+');

INSERT INTO OBJECT_TYPE (OBJECT_TYPE_ID, OBJECT_TYPE_NAME) VALUES (1, 'post');
INSERT INTO OBJECT_TYPE (OBJECT_TYPE_ID, OBJECT_TYPE_NAME) VALUES (2, 'user');
INSERT INTO OBJECT_TYPE (OBJECT_TYPE_ID, OBJECT_TYPE_NAME) VALUES (3, 'site');
