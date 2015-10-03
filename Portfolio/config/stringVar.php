<?php
session_save_path('./cgi-bin/tmp');
session_start();

if(!isset($_SESSION['language'])) $_SESSION['language']="English";

switch($_SESSION['language'])
{
	case "Chinese":
		define("S_NAV_HOME", "主页");
		define("S_NAV_RESUME", "简历");
		define("S_NAV_CONTACT", "联系我");
		define("S_NAV_BLOG", "博客");
		define("S_NAV_Hello", "你好");
		define("S_SUMMERY", "主修电脑编程，2年多工作经验，擅长JAVA, C#, C++,PHP 和 Python。现寻找一个作为编程员加入高科技团队的机会。");
		define("S_HOME_BUTTON_My_CV", "我的简历");
		define("S_CV_Software_Developer", "软件编程员");
		define("S_Telephone", "电话号码");
		define("S_Email", "邮箱地址");
		define("S_CONTACT_Looking_forward_to_answering_your_email", "期待你的来件");
		define("S_CONTACT_BUTTON_Submit", "发送");
		define("S_HOME_I_am_available_for_hiring", "我现在在找工作的机会");
		define("S_HOME_Introduce_title", "有活力！有创造思维");
		define("S_HOME_Introduce_content", "在工作中，我不是想作普通人而是总让自己很出色。 我不停学习新技术，技能和思维。 我喜欢思考并且勇于说出自己的想法。 同时，我也喜欢接纳吸收别人的想法。");
		define("S_HOME_FavoriteQuote_title", "智者若愚，保持求知欲。");
		
		
		
		
		
		
		
	break;
	case "French":
		define("S_NAV_HOME", "MAISON");
		define("S_NAV_RESUME", "CV");
		define("S_NAV_CONTACT", "CONTACT");
		define("S_NAV_BLOG", "le blog");
		define("S_NAV_Hello", "bonjour");
		define("S_SUMMERY", "Major en programmation informatique avec 2+ expériences de travail . Compétent en JAVA , C # , C ++ , PHP et Python . Vous cherchez une occasion de rejoindre une équipe très technique en tant que logiciel développeur .");
		define("S_HOME_BUTTON_My_CV", "mon CV");
		define("S_CV_Software_Developer", "développeur De Logiciels");
		define("S_Telephone", "téléphone");
		define("S_Email", "Email");
		define("S_CONTACT_Looking_forward_to_answering_your_email", "Au plaisir de répondre à votre e-mail");
		define("S_CONTACT_BUTTON_Submit", "soumettre");
		define("S_HOME_I_am_available_for_hiring", "Je suis disponible pour l'embauche");
		define("S_HOME_Introduce_title", "energitic！créatif！");
		define("S_HOME_Introduce_content", "Je veux toujours être remarquable et exceptionnelle dans le environnement de travail et de vie , instand d'être une personne ordinaire . Je continue à me l'amélioration par l'apprentissage de nouvelles technologies , de nouvelles compétences et de nouvelles idées . Amateur de penser et de parler à mon idée . Mais en attendant , je suis Ouverture à toute la rétroaction des autres .");
		define("S_HOME_FavoriteQuote_title", "CITATION FAVORITE");
		define("S_HOME_FavoriteQuote_content", "Rester affamé, rester idiot.");
		
		
		
		
		
		
		
	break;	
	Default:
		define("S_NAV_HOME", "HOME");
		define("S_NAV_RESUME", "RESUME");
		define("S_NAV_CONTACT", "CONTACT");
		define("S_NAV_BLOG", "BLOG");
		define("S_NAV_Hello", "Hello");
		define("S_SUMMERY", "Major in Computer Programming with 2+ work experiences. Proficient in JAVA, C#, C++,PHP and Python. Looking for an opportunity to join a highly technical team as software Developer.");
		define("S_HOME_BUTTON_My_CV", "My Resume");
		define("S_CV_Software_Developer", "Software Developer");
		define("S_Telephone", "Tel");
		define("S_Email", "Email");
		define("S_CONTACT_Looking_forward_to_answering_your_email", "Looking forward to answering your email");
		define("S_CONTACT_BUTTON_Submit", "Submit");
		define("S_HOME_I_am_available_for_hiring", "I am available for hiring");
		define("S_HOME_Introduce_title", "Energitic! Creative!");
		define("S_HOME_Introduce_content", "I always want to be remarkable and outstanding in the enviroment of working and living, instand of being a regular person. I keep improving myself by learning new technology, new skills and new ideas. I enjoy thinking and speaking out my idea. But meanwhile, I am openning to any feedback from others.");
		define("S_HOME_FavoriteQuote_title", "Favorite Quote");
		define("S_HOME_FavoriteQuote_content", "Stay hungry, stay foolish.");
		
		
		
		
		
		
		
}

?>