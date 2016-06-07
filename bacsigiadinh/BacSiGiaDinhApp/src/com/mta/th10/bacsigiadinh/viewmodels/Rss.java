package com.mta.th10.bacsigiadinh.viewmodels;

import org.simpleframework.xml.Attribute;
import org.simpleframework.xml.Element;
import org.simpleframework.xml.Root;

@Root(name = "rss")
public class Rss {
	@Element
	private RssChannel channel;
	
	@Attribute(name = "slash", required = false)
	private String slash;

	@Attribute
	private String version;

	public RssChannel getChannel() {
		return channel;
	}

	public String getSlash() {
		return slash;
	}

	public String getVersion() {
		return version;
	}
	
	
	
}
