package com.mta.th10.bacsigiadinh.viewmodels;

import org.simpleframework.xml.Element;
import org.simpleframework.xml.Root;

@Root(name="image")
public class RssImage {

	@Element
	private String url;
	
	@Element
	private String title;
	
	@Element
	private String link;

	public String getUrl() {
		return url;
	}

	public String getTitle() {
		return title;
	}

	public String getLink() {
		return link;
	}

}
