{# src/fr/ProjetBundle/Resources/views/Advert/profile_ldap.html.twig #}

{% extends "FrProjetBundle::layout.html.twig" %}

{% block title %}
 Profile - {{ parent() }}
{% endblock %}

{% block frprojet_body %}

  <h2>Profile</h2>

 <div class="well">
 <img src="info.jpegphoto[0]"  />
   {# <img src="content-type: image/jpeg {{ info.jpegphoto[0] }}"> #}
  {# <img src="{{ path('fr_projet_ldap_tof', {'tof': info.jpegphoto[0]}) }}" alt="">#}

  </div>

  <div class="well">
   {{ info.cn[0] }}
  </div>
   <div class="well">
    login: {{ info.uid[0] }}
  </div>

  <div class="well">
    mail: {{ info.mail[0] }}
  </div>
 
  <div class="well">
    mobile: {{ info.mobile[0] }}
  </div>
  


{% endblock %}