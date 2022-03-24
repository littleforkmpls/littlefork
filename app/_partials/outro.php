<script src="<?php echo $root_url; ?>assets/scripts/app.js?v=<?php echo $version; ?>"></script>
<script type="application/ld+json">
    {
        "@context":"https://schema.org",
        "@graph":[
            {
                "@type":[
                    "ProfessionalService",
                    "Organization"
                ],
                "name":"Little Fork",
                "legalName":"Little Fork LLC",
                "email":"info@little-fork.com",
                "telephone":"+1 (612) 217-4104",
                "url":"https://little-fork.com",
                "description":"Little Fork is a tiny web design & development company that brings big ideas to life.",
                "founder":{
                    "@type":"Person",
                    "givenName":"Tony",
                    "familyName":"Ticknor",
                    "url":"https://www.linkedin.com/in/apticknor/",
                    "image":{
                        "@type":"ImageObject",
                        "url":"https://little-fork.com/assets/media/avatar-tony.jpg",
                        "caption":"Tony Ticknor",
                        "width":"480",
                        "height":"480"
                    }
                },
                "location": {
                    "@type":"PostalAddress",
                    "addressLocality":"Minneapolis",
                    "addressRegion":"Minnesota",
                    "addressCountry":"USA",
                    "hoursAvailable":"Mo,Tu,We,Th,Fr 09:00-17:00"
                },
                "logo":{
                    "@type":"ImageObject",
                    "url":"https://little-fork.com/assets/brand/logo-horizontal.svg",
                    "caption":"Little Fork",
                    "width":"660",
                    "height":"164"
                }
            },
            {
                "@type":"WebSite",
                "name":"Little Fork",
                "url":"https://little-fork.com",
                "inLanguage":"en-US"
            }
        ]
    }
</script>
